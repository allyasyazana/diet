<?php

namespace App\Http\Controllers;

use App\RecordMeal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Meal;

class RecordMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$recordmeals = RecordMeal::with('meal1','meal2','meal3')
        $recordmeals = RecordMeal::all()
        ->where('user_id', auth()->user()->id);
        //->get();
        return view('recordmeals.index', compact('recordmeals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = Meal::all();

        return view('recordmeals.create', compact('meals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RecordMeal::create([
    		'user_id' => auth()->user()->id,
            'date' => $request->date,
            'meal_breakfast' => $request->meal_breakfast,
            'qty1' => $request->qty1,
            'subT1' => $request->subT1,
            'meal_lunch' => $request->meal_lunch,
            'qty2' => $request->qty2,
            'subT2' => $request->subT2,
            'meal_dinner' => $request->meal_dinner,
            'qty3' => $request->qty3,
            'subT3' => $request->subT3,
            'total'=> $request->total,           
    	]);

        return redirect()->route('recordmeals.index')
                        ->with('success','Record meal successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RecordMeal  $recordMeal
     * @return \Illuminate\Http\Response
     */
    public function show(RecordMeal $recordMeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecordMeal  $recordMeal
     * @return \Illuminate\Http\Response
     */
    public function edit(RecordMeal $recordMeal)
    {
        $meals = Meal::all();

        return view('recordmeals.edit', compact('meals','recordMeal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecordMeal  $recordMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecordMeal $recordMeal)
    {
        $recordMeal->update($request->all());

        return redirect()->route('recordmeals.index')
                        ->with('success','Record meal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecordMeal  $recordMeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecordMeal $recordMeal)
    {
        //
    }
}
