<?php

namespace App\Http\Controllers;

use App\Dietician;
use Illuminate\Http\Request;
use App\User;
//use DB;
use Illuminate\Support\Facades\Auth;

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
    public function edit(User $dietician)
    {
        //$dieticians = User::all();
        return view('dieticians.edit',compact('dietician'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dietician  $dietician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $dietician)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->image = $request->input('image');

        $user->update();

        return redirect()->route('dieticians.index')
                        ->with('success','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dietician  $dietician
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $dietician)
    {
        $dietician->delete();

        return redirect()->route('dieticians.table')
        ->with('success','Dietician deleted successfully');
    }
}
