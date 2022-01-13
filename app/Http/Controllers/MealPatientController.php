<?php

namespace App\Http\Controllers;

use App\MealPatient;
use App\Meal;
use Illuminate\Http\Request;

class MealPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('mealpatients.index',compact('meals'));
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
     * @param  \App\MealPatient  $mealPatient
     * @return \Illuminate\Http\Response
     */
    public function show(MealPatient $mealPatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MealPatient  $mealPatient
     * @return \Illuminate\Http\Response
     */
    public function edit(MealPatient $mealPatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MealPatient  $mealPatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealPatient $mealPatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MealPatient  $mealPatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealPatient $mealPatient)
    {
        //
    }
}
