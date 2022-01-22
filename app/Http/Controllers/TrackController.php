<?php

namespace App\Http\Controllers;

use App\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Meal;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$meals = Meal::all();
       //return view('tracks.index', compact('meals'));
        //$tracks = Track::all();
        $tracks = Track::with('meal','meal2','meal3')
        ->where('user_id', auth()->user()->id)
        ->get();
        return view('tracks.index', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = Meal::pluck('name','id');

        return view('tracks.create', compact('meals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Track::create([
    		'user_id' => auth()->user()->id,
            'meal_id' => $request->meal_id,
            'meal_id2' => $request->meal_id2,
            'meal_id3' => $request->meal_id3,
            'total'=> $request->total,           
    	]);

        return redirect()->route('tracks.index')
                        ->with('success','Track meal successfully.');
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
    public function edit(Track $track)
    {
        $meals = Meal::pluck('name', 'id');

        return view('tracks.edit', compact('meals','track'));
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
    public function destroy(Track $track)
    {
        $track->delete();

        return redirect()->route('tracks.index')
        ->with('success','Track meal deleted successfully');
    }
}
