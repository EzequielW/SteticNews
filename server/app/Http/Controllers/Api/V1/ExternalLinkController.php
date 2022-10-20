<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\ExternalLink;
use App\Http\Resources\V1\ExternalLinkResource;
use App\Http\Resources\V1\ExternalLinkCollection;
use App\Http\Requests\StoreExternalLinkRequest;
use App\Http\Requests\UpdateExternalLinkRequest;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExternalLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExternalLinkRequest $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ExternalLink $externalLink)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExternalLink $externalLink)
    {
        //
    }
}
