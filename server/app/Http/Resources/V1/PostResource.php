<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'region' => new RegionResource($this->region),
            'category' => new CategoryResource($this->category),
            'externalLinks' => new ExternalLinkCollection($this->externalLinks),
            'tags' => new TagCollection($this->tags),
            'createdAt' => $this->created_at
        ];
    }
}
