<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function insert(Request $request){
        DB::table('notes')->insert([
            'message' => $request->message,

        ]);
    }
    public function all_notes(){
        $note=DB::table('notes')->get();
        return view('note',compact('note'));
    }
}
