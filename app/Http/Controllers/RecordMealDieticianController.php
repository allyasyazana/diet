<?php

namespace App\Http\Controllers;

use App\RecordMealDietician;
use App\RecordMeal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Meal;

class RecordMealDieticianController extends Controller
{
    public function index()
    {
        //$recordmeals = RecordMeal::with('meal1','meal2','meal3')
        $recordmeals = RecordMeal::with('user')
        ->orderBy('date','desc')
        ->get();

        return view('recordmealdieticians.index', compact('recordmeals'));
    }
}
