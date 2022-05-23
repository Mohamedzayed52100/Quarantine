<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Nurse;

class NurseController extends Controller
{

    public function addnurse(){
        return view('addnurse');

    }
    public function storenurese(Request $request){
        $name=$request->name;
        $day=$request->day;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $n =new Nurse();
        $n->name = $name;
        $n->days_of_work = $day;
        $n->nur_image = $imageName;
        $n->save();
        return back()->with('success_added','Nurses record has been inserted');

    }
    public function allnurse()
    {
        $nurse = Nurse::all();
        return view('allnurse', compact('nurse'));
    }
    public function getbyidnurse($id)
    {
        $nurse = DB::table('nurse')->where('id', $id)->first();
        return view('onenurse', compact('nurse'));
    }
    public function editnurse($id)
    {
        $nurse = Nurse::find($id);
        return view('editnurse', compact('nurse'));
    }
    public function updatenurse(Request $request)
    {
        $name = $request->name;
        $day = $request->day;

        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        $n = Nurse::find($request->id);
        $n->name = $name;

        $n->days_of_work = $day;
        $n->nur_image = $imageName;
        $n->save();
        return back()->with('success_update', 'nurse record has been  updated');
    }
    public function deletenurse($id){
        $n=Nurse::find($id);
        unlink(public_path('images').'/'.$n->nur_image );
        $n->delete();
        return back()->with('success_delete','Nurse record has been  delete');
    }

}
