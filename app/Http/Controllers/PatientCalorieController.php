<?php

namespace App\Http\Controllers;
use App\User;
use App\PatientCalorie;
use App\Month;

use Illuminate\Http\Request;

class PatientCalorieController extends Controller
{
    public function index()
    {
        $patientcalories = PatientCalorie::with('user','month')
        ->orderBy('month_id','asc')
        ->get();

        return view('patientcalories.index',compact('patientcalories'));
        //return view('admins.index');
    }

    public function create()
    {
        $users = User::pluck('name', 'id');
        $months = Month::pluck('name', 'id');
        $patientcalories = User::where('is_patient', 1)->pluck('name', 'id');


        // dd($patientcalories);

        return view('patientcalories.create',  compact('months','patientcalories'));
    }

    public function store(Request $request)
    {
        PatientCalorie::create([
    		'user_id' => $request->user_id,
            'month_id' => $request->month_id,
            'calorie' => $request->calorie,
           
    	]);

        return redirect()->route('patientcalories.index')
                        ->with('success','Appointment created successfully.');
    }
}
