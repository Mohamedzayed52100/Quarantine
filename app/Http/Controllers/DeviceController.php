<?php

namespace App\Http\Controllers;
use App\Models\Device;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    public function adddevice()
    {
        return view('adddevice');
    }

    public function storedevices(Request $request)
    {
        $name = $request->name;
        $details = $request->details;
        $kind = $request->kind;
        $price = $request->price;
        $amount = $request->amount;
         $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('devices'), $imageName);
        $d = new Device();
        $d->name = $name;
        $d->details = $details;
        $d->kind = $kind;
        $d->price = $price;
         $d->image = $imageName;
         $d->amount = $amount;
        $d->save();
        return back()->with('success_added', 'device record has been inserted');
    }
    public function alldevices()
    {
        $device = Device::all();
        return view('alldevices', compact('device'));
    }
    public function deletedevice($id){
        $p=Device::find($id);
        unlink(public_path('devices').'/'.$p->image );
        $p->delete();
        return back()->with('success_delete','Device record has been  delete');
    }
    public function onedevice($id)
    {
        $d = DB::table('device')->where('id', $id)->first();
        return view('onedevice', compact('d'));
    }
    public function editdevice($id)
    {
        $device = Device::find($id);
        return view('editdevice', compact('device'));
    }
    public function updatedevice(Request $request)
    {
        $name = $request->name;
        $kind = $request->kind;
        $price = $request->price;
        $details = $request->details;
        $amount = $request->amount;
         $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('devices'), $imageName);
        $device = Device::find($request->id);
        $device->name = $name;
        $device->kind = $kind;
        $device->details = $details;
        $device->price = $price;
        $device->amount = $amount;
         $device->image = $imageName;
        $device->save();
        return back()->with('success_update', 'device record has been  updated');
    }


    // ---------------------------
    public function search(){
        return view('searchdevice');
    }
    public function autocomplete(Request $request){
        $datas=Device::select('name')
                        ->where('name','LIKE',"%{$request->terms}%")
                        ->get();
         return response()->json($datas);
        // return $request->id;
    }
    public function get_result_search(Request $request){
        $device = DB::table('device')->where('name', $request->name)->first();

        // $name = $request->name;
        // $id =Pation::all();

        // device searchedpation.blade
       // return $device;
        return view('devicesearched', compact('device'));

        //return view('searchedpation', compact('device'));

    }
    public function by_kind($kind){
        $device =DB::table('device')->where('kind', $kind)->get();
        return view('buy' , compact('device'));


    }









}
