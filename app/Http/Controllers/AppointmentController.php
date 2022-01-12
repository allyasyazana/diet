<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\User;
use App\Day;
use App\Time;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$appointments = Appointment::with('patients');
        //$patients = User::all();
        //$appointments = Appointment::all();
        $appointments = Appointment::with('user','day','time')
        ->get();
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::pluck('name', 'id');
        $times = Time::pluck('name', 'id');
        

        return view('appointments.create', compact('days','times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Appointment::create([
    		'user_id' => auth()->user()->id,
            'day_id' => $request->day_id,
            'time_id' => $request->time_id,
           
    	]);

        return redirect()->route('appointments.index')
                        ->with('success','Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $users = User::pluck('name', 'id');

        return view('appointments.edit', compact('users','appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());

        return redirect()->route('appointments.index')
                        ->with('success','Patient appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')
        ->with('success','Patient appointments deleted successfully');
    }
}
