<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ExternalLink;
use App\Http\Resources\V1\ExternalLinkResource;
use App\Http\Resources\V1\ExternalLinkCollection;
use App\Http\Requests\V1\StoreExternalLinkRequest;
use App\Http\Requests\V1\UpdateExternalLinkRequest;
use App\Http\Controllers\Controller;

class ExternalLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ExternalLinkCollection(ExternalLink::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExternalLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExternalLinkRequest $request)
    {
        return new ExternalLinkResource(ExternalLink::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function show(ExternalLink $externalLink)
    {
        return new ExternalLinkResource($externalLink);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExternalLinkRequest  $request
     * @param  \App\Models\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExternalLinkRequest $request, ExternalLink $externalLink)
    {
        return $externalLink->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExternalLink $externalLink)
    {
        $externalLink->delete();
    }
}
