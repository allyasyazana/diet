<?php

namespace App\Http\Controllers;
use App\User;
use App\PatientCalorie;

use Illuminate\Http\Request;

class PatientCalorieController extends Controller
{
    public function index()
    {
        $patientcalories = PatientCalorie::all();
        return view('patientcalories.index',compact('patientcalories'));
        //return view('admins.index');
    }

    public function create()
    {
        $users = User::pluck('name', 'id');

        return view('patientcalories.create',  compact('users'));
    }
}
