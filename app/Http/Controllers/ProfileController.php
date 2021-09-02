<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileCreateUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Auth::user();
        return view('profile.edit', compact( 'profile'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileCreateUpdateRequest $request, $id)
    {
        $current = Carbon::now()->format('YmdHs');
        $ext = $request->file('image')->getClientOriginalExtension();

        $path = $request->file('image')
            ->storeAs('public/images', $request->user()->name .'.' . $ext.$current);

        $profile = Auth::user();

        $profile->image = 'images/' . $request->user()->name .'.' . $ext;

        $profile->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function change_password(){
        return view('profile.change_password');
    }
    public function update_password(Request $request){
        $request->validate([
            'old_password'=>'required|min:6|',
            'new_password'=>'required|min:6|',
            'confirm_password'=>'required|same:new_password'
        ]);

        $current_user = auth()->user();

        if(Hash::check($request->old_password,$current_user->password)){

            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);

            return Redirect::back()->with('success','Password successfully updated.');

        }else{
            return Redirect::back()->with('error','Old password does not matched.');
        }

    }
}
