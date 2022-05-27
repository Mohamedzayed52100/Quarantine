<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PationController;
use  App\Http\Controllers\NurseController;
use  App\Http\Controllers\DoctorController;
use  App\Http\Controllers\DeviceController;
use  App\Http\Controllers\AdmainController;
use  App\Http\Controllers\NotesController;
use  App\Http\Controllers\PaymentController;
use  App\Http\Controllers\ZipController;
use  App\Http\Controllers\UserController;




// Route::get('/profile',function () {
//     return view('profile');
// });
// Route::get('/devices', function(){
// return view('devices');
// });
// // // Route::get('/test', function(){
// // // return view('test');
// // // });
// Route::get('/buy', function(){
// return view('buy');
// });
// Route::get('/doctors', function(){
// return view('doctors');
// });
// Route::get('/notes', function(){
// return view('notes');
// });
// Route::get('/record', function(){
//     return view('record');
// });
// Route::get('/showone', function(){
//     return view('show_one_device');
// });

Route::group(['middleware'=>'myadmain'], function(){


Route::get('/test', [PationController::class, 'index']);
Route::post('/test', [PationController::class, 'storePation'])->name('store.pation');
Route::get('/update/{id}', [PationController::class, 'editpation']);
Route::post('/update', [PationController::class, 'updatepation'])->name('update.pation');
Route::get('/allpation', [PationController::class, 'student']);
Route::get('/getbyid/{id}', [PationController::class, 'getbyid']);
Route::get('/deletepation/{id}', [PationController::class, 'deletepation']);
Route::get('/search', [PationController::class, 'search']);
Route::get('/autocomplete', [PationController::class, 'autocomplete'])->name('autocomplete');
Route::post('/sea', [PationController::class, 'se']);
//------------nurse--------------
Route::get('/nurse', [NurseController::class, 'addnurse']);
Route::get('/allnurse', [NurseController::class, 'allnurse']);
Route::post('/nurse', [NurseController::class, 'storenurese'])->name('store.nurse');
Route::get('/editnurse/{id}', [NurseController::class, 'editnurse']);
Route::get('/getbyidnurse/{id}', [NurseController::class, 'getbyidnurse']);
Route::post('/updatenurse', [NurseController::class, 'updatenurse'])->name('update.nurse');
Route::get('/deletenurse/{id}', [NurseController::class, 'deletenurse']);
//---------------------------------Doctors--------------
Route::get('/adddoctor', [DoctorController::class, 'adddoctor']);
Route::get('/alldoctor', [DoctorController::class, 'doctor']);
Route::get('/onedoctor/{id}', [DoctorController::class, 'onedoctor']);
Route::get('/deleteDoctor/{id}', [DoctorController::class, 'deleteDoctor']);
Route::post('/storeDoctor', [DoctorController::class, 'storeDoctor'])->name('store.doctor');
Route::get('/editdoctor/{id}', [DoctorController::class, 'edit']);
Route::post('/updatedoctor', [DoctorController::class, 'updatedoc']);
//----------------------------device----------------------------
Route::get('/by_kind/{kind}',[DeviceController::class, 'by_kind']);
Route::get('/add_device',[DeviceController::class, 'adddevice']);
Route::post('/storedevices',[DeviceController::class, 'storedevices'])->name('store.device');
Route::get('/all_devices',[DeviceController::class, 'alldevices']);
Route::get('/deletedevice/{id}',[DeviceController::class, 'deletedevice']);
Route::get('/onedevice/{id}',[DeviceController::class, 'onedevice']);
Route::get('/editdevice/{id}',[DeviceController::class, 'editdevice']);
Route::post('/updatedevice',[DeviceController::class, 'updatedevice']);
Route::get('/search_device', [DeviceController::class, 'search']);
Route::get('/autocomplete_device', [DeviceController::class, 'autocomplete'])->name('autocomplete_device');
Route::post('/get_result_search', [DeviceController::class, 'get_result_search']);
//----------------------admain--------------------------
// Route::get('/admainhome', [AdmainController::class, 'index']);
//-------------------payment and notes and zip downlooad----------------
Route::get('/payment', [PaymentController::class, 'all_payments']);
Route::get('/note', [NotesController::class, 'all_notes']);
Route::get('/zipFile', [ZipController::class , 'zipFile'])->name('zipFile');
//--------------------------login------------------
Route::get('/admain_go',[AdmainController::class, 'admain_go']);
Route::get('/logout',[AdmainController::class, 'logout']);

});
Route::group(['middleware'=>'myadmaincheck'], function(){

    Route::get('admain_login',[AdmainController::class, 'admainlogin']);
    Route::post('admain_login',[AdmainController::class, 'admainloginsubmit']);
});



// Route::get('admain_login',[AdmainController::class, 'admainlogin']);
// Route::post('admainloginsubmit',[AdmainController::class, 'admainloginsubmit']);

//----------------------------------user-----------



// Route::get('/joo', function(){
//     $name =request('name');
//     return $name;

// });



Route::group(['middleware'=>'myusercheck'], function(){

    Route::get('/', function(){
        return view('welcome');

    });

    Route::post('/user_login_submiti', [UserController::class,'user_login_submiti']);

});




Route::group(['middleware'=>'myuser'], function(){
    Route::get('/profile', [UserController::class,'profile']);
    Route::get('/buy', [UserController::class,'buy_device']);
    Route::get('/record', [UserController::class,'record']);
    Route::get('/notes', [UserController::class,'notes']);
    Route::get('/buy_one_device/{id}', [UserController::class,'one_device']);
    Route::post('/buydevice', [UserController::class,'buydevice']);
    Route::post('/recordinfo', [UserController::class,'recordinfo']);
    Route::post('/recordnote', [UserController::class,'recordnote']);
    Route::get('/logout',[UserController::class, 'logout' ]);


    });
