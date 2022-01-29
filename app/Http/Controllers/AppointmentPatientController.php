<?php

namespace App\Http\Controllers;

use App\AppointmentPatient;
use Illuminate\Http\Request;
use App\Appointment;
use App\User;
use App\Time;
use Illuminate\Support\Facades\Auth;

class AppointmentPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = Auth::user();
        //$appointments = Appointment::with('user')
        //->where('user_id', auth()->user()->id)
        //->get();
        //$appointments = Appointment::where('user_id', $users->id)
        //->get();
        //$appointments = Appointment::all();
        $appointments = Appointment::with('user','time')
        ->orderBy('date','asc')
        ->orderBy('time_id','asc')
        ->get();
        return view('appointmentpatients.index', compact('appointments'));
    }

    public function approved($id)
    {
        $appointments = Appointment::find($id);

        $appointments->status = 'Approved';

        $appointments->save();

        return redirect()->back();
    }

    public function rejected($id)
    {
        $appointments = Appointment::find($id);

        $appointments->status = 'Rejected';

        $appointments->save();

        return redirect()->back();
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
     * @param  \App\AppointmentPatient  $appointmentPatient
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentPatient $appointmentPatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppointmentPatient  $appointmentPatient
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentPatient $appointment)
    {
        $times = Time::pluck('name', 'id');

        return view('appointmentpatients.edit', compact('times','appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppointmentPatient  $appointmentPatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentPatient $appointmentPatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppointmentPatient  $appointmentPatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentPatient $appointmentPatient)
    {
        //
    }
}
