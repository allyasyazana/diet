<?php

namespace App\Http\Controllers;

use App\AppointmentPatient;
use Illuminate\Http\Request;
use App\Appointment;

class AppointmentPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointmentpatients.index', compact('appointments'));

        
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
    public function edit(AppointmentPatient $appointmentPatient)
    {
        //
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
