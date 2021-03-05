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
        $user = Auth::user();
        return view('admin.profileEdit',compact('user'));
    }

     public function update(CreateUpdateRequest $request, user $user)
    {
        $ext = $request->file('filename')->getClientOriginalExtension(); 
        $filename = str_replace(' ', '_', $request->name);
        $path = $request->file('filename')
            ->storeAs('public/user_images', $filename .'.' . $ext);

        $user->email = $request->email;
        $user->picture = 'user_images/' . $filename .'.' . $ext;
    
        return redirect()->route('cars.index')
                ->with('success', 'A car was edited!'); 

    }

}
