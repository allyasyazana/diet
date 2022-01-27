<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Meal;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$records = Record::with('meal1','meal2','meal3')
        $records = Record::all()
        ->where('user_id', auth()->user()->id);
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = Meal::all();

        return view('records.create', compact('meals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Record::create([
    		'user_id' => auth()->user()->id,
            'date' => $request->date,
            'meal1' => $request->meal1,
            'qty1' => $request->qty1,
            'subT1' => $request->subT1,
            'meal2' => $request->meal2,
            'qty2' => $request->qty2,
            'subT2' => $request->subT2,
            'meal3' => $request->meal3,
            'qty3' => $request->qty3,
            'subT3' => $request->subT3,
            'total'=> $request->total,           
    	]);

        return redirect()->route('records.index')
                        ->with('success','Record meal successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
