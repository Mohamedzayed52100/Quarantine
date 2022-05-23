<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function insert(Request $request){
        DB::table('payment')->insert([
            'name'=>$request->name,
            'amount'=>$request->amount,
            'dateofprocess'=>$request->dateofprocess,
        ]);
    }
    public function all_payments(){
        $payment=DB::table('payment')->get();
        return view('allpayment', compact('payment'));
    }


}
