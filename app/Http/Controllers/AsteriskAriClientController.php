<?php

namespace App\Http\Controllers;

use App\Models\AsteriskAriClient;
use App\Http\Requests\StoreAsteriskAriClientRequest;
use App\Http\Requests\UpdateAsteriskAriClientRequest;

class AsteriskAriClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StoreAsteriskAriClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsteriskAriClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AsteriskAriClient  $asteriskAriClient
     * @return \Illuminate\Http\Response
     */
    public function show(AsteriskAriClient $asteriskAriClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsteriskAriClient  $asteriskAriClient
     * @return \Illuminate\Http\Response
     */
    public function edit(AsteriskAriClient $asteriskAriClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsteriskAriClientRequest  $request
     * @param  \App\Models\AsteriskAriClient  $asteriskAriClient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsteriskAriClientRequest $request, AsteriskAriClient $asteriskAriClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsteriskAriClient  $asteriskAriClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsteriskAriClient $asteriskAriClient)
    {
        //
    }
}
