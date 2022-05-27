<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function user_login_submiti(Request $request)
    {
        $pation = DB::table('pation')->where('mri', $request->mri)->first();


        if ($pation) {

         //   $user1 = $pation[0];
            $doc = DB::table('doctor')->where('id', $pation->doc_id)->first();

          //  $user2 = $doc[0];
            //session()->regenerate();
            session([ 'logined' => true]);
            session([
                'logined' => true,
                //'id' => $user1->id,
                'user' => $pation,
                'doc' => $doc,
                'mri'=>$pation->mri,
            ]);

            return  redirect('/profile');
            //return redirect('/admain_go');


            // return view('profile', compact('pation', 'doc' ));

        } else {
            return back()->with('invaild', 'Invalid MRN number')->withInput();
        }
    }
    public function profile(Request $request)
    {




        return  view('profile');

        /*
        // $res = DB::select('select * from pation where mri ? ', [$request->password]);
        $res=DB::table('pation')->where('mri',$request->password)->get();

        if ($res) {
            $p = $res[0];
            session()->regenerate();
            session(['logined' => true, 'pationid' => $p->id, 'pationname' => $p->name, 'pation' => $p]);
            //     session([]);
            //     session([]);
            //     session([]);
            //    // return "your data is corretc";
            return redirect('/profile');
        } else
            // return redirect('userlogin');
            return back()->with(['mess' => 'wrong name or password'])->withInput();

        */
        // return $request->all();

    }
    public function buy_device()
    {
        $device = DB::select('select * from device');
        return view('buy', compact('device'));
    }
    public  function one_device($id)
    {
        $d = DB::table('device')->where('id', $id)->first();

        return view('buy_one_device', compact('d'));
    }
    public function buydevice(Request $request)
    {
        $asked = $request->amount;
        $idd = $request->idd;

        $amound = DB::update('update device set amount =amount- ? where id = ?', array(  $asked, $idd));

        DB::table('payment')->insert([
            'name' => $request->name,
            'amount' => $request->amount,
            'dateofprocess' => $request->date,
        ]);
        return back()->with('success_buy', 'Success payment');
    }
    public function record()
    {
        return view('record');
    }
    public function recordinfo(Request $request)
    {
        //  return $request->all();

/*
public function merchant($id){
    $merchant = Merchant::whereId($id)->get();
    return redirect('Merchant view')->with(compact('merchant'));
}

*/
$al=1;

$doctors=DB::table('doctor')->where('id', 1)->first();
/*
1- الحرارة الطبيعي من 36.6-38
الخطر بقي اعلي حاجه 42

2- ال oxygen level الطبيعي من 95%-100%  ...اقل  من 90 يبقي خطر
3- ال respiratory من 12 -25 اقل من 12 أو اعلي من 25 خطر

4- ال pulse من 60 -100 اقل بردو من 60 أو اعلي من 100 خطر

5- ال blood pressure من 110-131 اقل من 110 أو اعلي من 131 خطر

6- ال glucose الطبيعي اقل من 140 اعلي بقي خطر

*/
        $vaaa =   $request->validate([
             'mri' => 'required|min:6|max:12',
            'temperature' => 'required|min:1|max:2',
            'oxygen' => 'required|min:1|max:3',
            'respiratory' => 'required|min:1|max:3',
            'pluse_indicator' => 'required|min:1|max:3',
            'blood_pressure' => 'required|min:1|max:3',
            'blood_glucose_level' => 'required|min:1|max:3',
        ]);
        $temp = $request->temperature;
        $ox = $request->oxygen;
        $res = $request->respiratory;
        $pul = $request->pluse_indicator;
        $press = $request->blood_pressure;
        $pleve = $request->blood_glucose_level;
        if( $request->temperature >42){
            return back()->with('invaild_reange', 'this value of temperature not as standard')->withInput();
        }


        DB::table('record')->insert([
            'mri' => $request->mri,
            'temperature' => $request->temperature,
            'oxygen' => $request->oxygen,
            'respiratory' => $request->respiratory,
            'pluse_indicator' => $request->pluse_indicator,
            'blood_pressure' => $request->blood_pressure,
            'blood_glucose_level' => $request->blood_glucose_level,
        ]);
        if ($temp >= 39 || $ox > 100 || $ox <90 || $res>25 || $res<12||  $pul  >100 ||$press>131 ||$pleve<140) {

            session(['doc_alaa'=>$doctors]);

            return back()->with('state', 'the patient state not good')->withInput();
            //return redirect('/record')->with(compact('merchant'));
        }
        return back()->with('submit', 'submit value')->withInput();
    }
    public function notes()
    {
        // return view('notes');
        return back()->with('notes', 'notes value');
    }
    public function recordnote(Request $request)
    {
        DB::table('notes')->insert([
            'message' => $request->message,
        ]);
        return  back();
    }

    public function logout()
    {
        session()->invalidate();
        return redirect('/');
    }
}
