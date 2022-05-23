<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmainController extends Controller
{

    public function admainlogin(){
        return view('admain_login');
    }
    public function admainloginsubmit(Request $request){
        if ($request->password==123456)
        return view('admain');
        else
        return back()->with('error', 'the invaild password');
    }
}
