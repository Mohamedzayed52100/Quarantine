<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmainController extends Controller
{

    public function admainlogin()
    {
        return view('admain_login');
    }
    public function admainloginsubmit(Request $request)
    {
        if ($request->password == 123456) {
            session(['logined' => true]);

            session()->regenerate();

            // return redirect('/profile');

            return redirect('/admain_go');
        } else
            return back()->with('error', 'the invaild password');
    }
    public function admain_go()
    {
        return view('admain');
    }

    public function logout(Request $request)
    {
        //session()->flush();
        session()->invalidate();
        return redirect('/admain_login');
    }
}
