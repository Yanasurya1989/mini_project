<?php

namespace App\Http\Controllers;

use App\Models\Auth_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Auth_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // dd('hjhho');
        return view('backend.login.login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/inv');
        }

        // return back()->withErrors([
        //     'email' => 'hjhkkhkjh',
        // ])->onlyInput('email');

        Session::flash('status', 'failed');
        Session::flash('message', 'login failed');

        return redirect('/login');
    }

    public function logout(Request $request){
        // dd('ghjgjhg');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
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
     * @param  \App\Models\Auth_model  $auth_model
     * @return \Illuminate\Http\Response
     */
    public function show(Auth_model $auth_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth_model  $auth_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Auth_model $auth_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth_model  $auth_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth_model $auth_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth_model  $auth_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth_model $auth_model)
    {
        //
    }
}
