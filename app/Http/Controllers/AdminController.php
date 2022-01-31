<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\DB;
use Auth;
//use App\Http\Controllers\Auth;
//use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
        // if(Auth::user()->is_patient == '0'){

        //     $admins = DB::table('users')->get();
        //     dd($admins);
        //     //$admins = User::all();
        //     //return view('admins.index',compact('admins'));
        // }
        //$admins = User::all();
        //dd($dieticians);
        // $admins = User::all();
        // return view('admins.index',compact('admins'));
        return view('admins.index');
    }

    public function create()
    {
        return view('admins.create');
    }

    public function adddietician(Request $request)
    {
        $data = new user;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->password=bcrypt($request->password);

        $data->phone=$request->phone;

        $data->address=$request->address;

        $data->is_patient='0';

        $data->save();

        return redirect()->route('admins.index')
                        ->with('success','New dietician created successfully.');

    }
}
