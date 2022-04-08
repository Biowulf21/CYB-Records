<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReleaseYearRequest;
use App\Http\Requests\UpdateReleaseYearRequest;
use App\Models\ReleaseYear;

class ReleaseYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreReleaseYearRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReleaseYearRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReleaseYear  $releaseYear
     * @return \Illuminate\Http\Response
     */
    public function show(ReleaseYear $releaseYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReleaseYear  $releaseYear
     * @return \Illuminate\Http\Response
     */
    public function edit(ReleaseYear $releaseYear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReleaseYearRequest  $request
     * @param  \App\Models\ReleaseYear  $releaseYear
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReleaseYearRequest $request, ReleaseYear $releaseYear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReleaseYear  $releaseYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReleaseYear $releaseYear)
    {
        //
    }
}
