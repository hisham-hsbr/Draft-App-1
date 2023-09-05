<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Notification;

class NotificationController extends Controller
{
    //
    public function create()
    {
        $users = User::all();
        return view('demo.demo-notfy',compact('users'));
    }
    public function store(Request $request)
    {
        // dd("hai");
        dd($request->all);
    }
    public function index()
    {
        // dd($request->all());
    }
    public function show()
    {
        // dd($request->all());
    }
    public function update()
    {
        // dd($request->all());
    }
    public function markAsRead($id)
    {
       Auth::user()->notifications->where('id',$id)->markAsRead();
       return redirect()->back();
    }
    public function notify()
    {
        $users = User::all();
       Auth::user()->notify(new TaskComplete($users));
    }
}
