<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile(Request $request){
        // return $request->all();
        $pation=DB::table('pation')->where('mri',$request->mri)->first();


        if($pation)
        {
            $doc=DB::table('doctor')->where('id',$pation->doc_id)->first();
        return view('profile', compact('pation', 'doc' ));

        }
        else {
            return back()->with('invaild', 'in-valild MRI number');
        }
    }
    public function buy_device(){
        $device =DB::select('select * from device');
        return view('buy', compact('device'));
    }
    public  function one_device($id){
        $d = DB::table('device')->where('id', $id)->first();

        return view('buy_one_device', compact('d'));
    }
    public function buydevice(Request $request){
        $asked=$request->amount;

        $amound =DB::update('update device set amount =amount-'. $asked);

        DB::table('payment')->insert([
            'name'=>$request->name,
            'amount'=>$request->amount,
            'dateofprocess'=>$request->date,
        ]);
        return back()->with('success_buy', 'Success payment');

    }
    public function record(){
        return view('record');
    }
    public function recordinfo(Request $request){

        $temp=$request->temperature;
        $ox=$request->oxygen;

        DB::table('record')->insert([
            'mri'=>$request->mri,
            'temperature'=>$request->temperature,
            'oxygen'=>$request->oxygen,
        ]);
        if($temp>40 || $ox >100){
            return back()->with('state','the pation state not good');
        }
        return back()->with('state','submit value');


    }
    public function notes(){
        // return view('notes');
        return back()->with('notes','notes value');
    }
    public function recordnote(Request $request){
        DB::table('notes')->insert([
            'message'=>$request->message,
        ]);
        return  back();
    }
}
