<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create',[HomeController::class,'create']);
Route::post('/insert-data',[HomeController::class,'insertData'])->name('insert-data');
Route::get('/display',[HomeController::class,'display']);
Route::get('/edit{id}',[HomeController::class,'edit']);
Route::put('/update-data/{id}',[HomeController::class,'update'])->name('update-data/{id}');
Route::get('/success',[HomeController::class,'success']);
Route::get('/admindisplay',[HomeController::class,'admindisplay']);
Route::get('/adminedit{id}',[HomeController::class,'adminedit']);
Route::get('/createsuccess',[HomeController::class,'createsuccess']);
Route::put('/updatedata/{id}',[HomeController::class,'updateData'])->name('updatedata/{id}');
Route::get('/export_user',[HomeController::class,'export_user'])->name('export_user');
Route::delete('/delete-user/{id}',[HomeController::class.'deleteData'])->name('deletedata.user');