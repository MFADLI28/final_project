<?php

namespace App\Http\Controllers;

use App\Models\Weekly;
use Illuminate\Http\Request;

class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weekly  $weekly
     * @return \Illuminate\Http\Response
     */
    public function show(Weekly $weekly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weekly  $weekly
     * @return \Illuminate\Http\Response
     */
    public function edit(Weekly $weekly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weekly  $weekly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weekly $weekly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weekly  $weekly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weekly $weekly)
    {
        //
    }
}
