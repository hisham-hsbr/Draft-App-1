<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $users = User::all();
        return view('back-end.dashboard', compact('users'));
    }
    public function dashboard()
    {

        dd('dashboard');
         $users = User::all();
         return view('back-end.dashboard', compact('users'));
        //  $vv = DB::table("settings")->where('name', '=', 'Application Name')->first();
        // return view('admin.home', compact('users','vv'));
    }
    // public function show()
    // {
    //     dd('ss');
    //      $users = User::all();
    //      return view('back-end.dashboard', compact('users'));
    //     //  $vv = DB::table("settings")->where('name', '=', 'Application Name')->first();
    //     // return view('admin.home', compact('users','vv'));
    // }
}
