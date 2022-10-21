<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostCollection;
use App\Http\Requests\V1\StorePostRequest;
use App\Http\Requests\V1\UpdatePostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->query('search') == null){
            return new PostCollection(Post::orderBy('created_at', 'desc')->paginate(3));
        }
        else{
            $searchTerm = $request->query('search');
            // split on 1+ whitespace & ignore empty (eg. trailing space)
            $searchValues = preg_split('/\s+/', $searchTerm, -1, PREG_SPLIT_NO_EMPTY);

            $postsByTags = Post::whereHas('tags', function($query) use ($searchValues) {
                foreach ($searchValues as $key=>$value) {
                    if($key == 0){
                        $query->whereRaw("? LIKE CONCAT('%', `name`, '%')", [$value]);
                    }
                    else{
                        $query->orWhereRaw("? LIKE CONCAT('%', `name`, '%')", [$value]);
                    }
                }
            }); 

            $postsByContent = $postsByTags->orWhere(function($query) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $query->orWhere('content', 'like', "%{$value}%");
                }
            });

            return new PostCollection($postsByContent->orderBy('created_at', 'desc')->paginate(3));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        return new PostResource(Post::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        return $post->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
    }
}
