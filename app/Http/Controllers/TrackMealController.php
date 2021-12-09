<?php

namespace App\Http\Controllers;

use App\TrackMeal;
use Illuminate\Http\Request;
use App\User;

class TrackMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tracks.index');
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
     * @param  \App\TrackMeal  $trackMeal
     * @return \Illuminate\Http\Response
     */
    public function show(TrackMeal $trackMeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrackMeal  $trackMeal
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackMeal $trackMeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrackMeal  $trackMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackMeal $trackMeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrackMeal  $trackMeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackMeal $trackMeal)
    {
        //
    }
}
