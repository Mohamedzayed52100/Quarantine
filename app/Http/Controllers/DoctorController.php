<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{

    public function adddoctor(){
        return view('adddoctor');
    }
    public function storeDoctor(Request $request){
        $name=$request->name;
        $phone=$request->phone;
        $details=$request->details;
        $specialist=$request->specialist;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('image'),$imageName);
        $d =new Doctor();
        $d->name = $name;
        $d->specialist = $specialist;
        $d->doc_image = $imageName;
        $d->phone = $phone;
        $d->details = $details;
        $d->save();
        return back()->with('success_added','Doctors record has been inserted');
    }
    public function doctor(){
        $d=Doctor::all();
        return view('alldoctor',compact('d'));
    }
    public function onedoctor($id){
        $d=DB::table('doctor')->where('id', $id)->first();
        //$d =Doctors::find('id',$id);
        return view('onedoctor', compact('d'));
    }
    public function deleteDoctor($id){
        DB::table('doctor')->where('id', $id)->delete();
        return back()->with('success_delete','Doctors record has been  delete');

    }
    public function edit($id){
        $d = DB::table('doctor')->where('id', $id)->first();
        return view('editdoctor', compact('d'));
    }
    public function updatedoc(Request $request){
        $name=$request->name;
        $specialist=$request->specialist;
        $phone=$request->phone;
        $details=$request->details;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('image'),$imageName);
        $d = Doctor::find($request->id);
        $d->name = $name;
        $d->phone = $phone;
        $d->details = $details;
        $d->specialist = $specialist;
        $d->doc_image = $imageName;
        $d->save();
        return back()->with('success_update','Doctor record has been  updated');
    }

}
