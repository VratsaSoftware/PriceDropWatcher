<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = Auth::user();
        // dd($user);
        // $id = Auth::id;
        // dd($id);
        return view('admin.index');
    }

    public function ShowProfile()
    {
        $user = Auth::user();
        return view('admin.profileShow',compact('user'));
    }
    public function EditProfile()
    {
        return view('admin.profileEdit');
    }
}
