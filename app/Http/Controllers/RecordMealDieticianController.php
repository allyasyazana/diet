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

    public function search(Request $request)
    {
        //$recordmeals = $request->get('query');
        $search_text= isset($request->user_id) ? $request->user_id : null;
        info($search_text);
        //$search_text = $_GET['query'];
        $recordmeals = RecordMeal::where('user_id','LIKE', '%'.$search_text.'%')->get();
        info($recordmeals);

        //dd($recordmeals);

        return view('recordmealdieticians.search', compact('recordmeals'));
    }
}
