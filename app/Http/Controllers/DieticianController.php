<?php

namespace App\Http\Controllers;

use App\Dietician;
use Illuminate\Http\Request;
use App\User;

class DieticianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $dieticians = User::all();
        //dd($dieticians);
        return view('dieticians.index',compact('dieticians'));
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
     * @param  \App\Dietician  $dietician
     * @return \Illuminate\Http\Response
     */
    public function show(Dietician $dietician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dietician  $dietician
     * @return \Illuminate\Http\Response
     */
    public function edit(Dietician $dietician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dietician  $dietician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dietician $dietician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dietician  $dietician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dietician $dietician)
    {
        //
    }
}
