<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pation;
use Illuminate\Support\Facades\DB;

class PationController extends Controller
{


    public function index()
    {
        return view('test');
    }
    // public function addpation(){
    //     return view('buy');
    // }
    public function storePation(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mri = $request->mri;
        $phone = $request->phone;
        $diagnosis = $request->diagnosis;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        $pation = new Pation();
        $pation->name = $name;
        $pation->email = $email;
        $pation->mri = $mri;
        $pation->phone = $phone;
        $pation->diagnosis = $diagnosis;
        $pation->pat_image = $imageName;
        $pation->save();
        return back()->with('success_added', 'Pation record has been inserted');
    }
    public function student()
    {
        $pation = Pation::all();
        return view('allpation', compact('pation'));
    }
    public function getbyid($id)
    {
        $pation = DB::table('pation')->where('id', $id)->first();
        return view('onepation', compact('pation'));
    }
    public function editpation($id)
    {
        $pation = Pation::find($id);
        return view('editpation', compact('pation'));
    }
    public function updatepation(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mri = $request->mri;
        $phone = $request->phone;
        $diagnosis = $request->diagnosis;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        $pation = Pation::find($request->id);
        $pation->name = $name;
        $pation->email = $email;
        $pation->mri = $mri;
        $pation->phone = $phone;
        $pation->diagnosis = $diagnosis;
        $pation->pat_image = $imageName;
        $pation->save();
        return back()->with('success_update', 'PAtion record has been  updated');
    }
    public function deletepation($id){
        $p=Pation::find($id);
        unlink(public_path('images').'/'.$p->pat_image );
        $p->delete();
        return back()->with('success_delete','Pation record has been  delete');
    }

    // ---------------------------
    public function search(){
        return view('searchpation');
    }
    public function autocomplete(Request $request){
        $datas=Pation::select('name')
                        ->where('name','LIKE',"%{$request->terms}%")
                        ->get();
         return response()->json($datas);
        // return $request->id;
    }
    public function se(Request $request){
        $pation = DB::table('pation')->where('name', $request->name)->first();
        // $name = $request->name;
        // $id =Pation::all();
        return $pation;
    }

}
