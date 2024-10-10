<?php
use App\Http\Controllers\rcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::any('/insert', [usercontroller::class ,'index']);
Route::get('/{id}',[usercontroller::class,'delete1']);
Route::any('/updateform/{id}',[usercontroller::class,'update']);

Route::any('/user/insert1',[registercontroller::class,'index']);
// Route::any('/user1/login', function(){
//     return view('login');
// });

Route::any('/user/login',[registercontroller::class,'index1']);
Route::get('/user/showdata',[registercontroller::class,'index2']);
Route::any('/user/{id}',[registercontroller::class,'delete']);
Route::any('/user/update/{id}',[registercontroller::class,'update']);


Route::any('register/insert2',[rcontroller::class ,'index']);
Route::any('register/login1',[rcontroller::class ,'index1']);
Route::any('register/viewdata',[rcontroller::class ,'index2']);
Route::any('register/{id}',[rcontroller::class ,'delete2']);
Route::any('register/update2/{id}',[rcontroller::class ,'update2']);
 