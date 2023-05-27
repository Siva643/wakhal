<?php

use App\Http\Controllers\Productadd;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwlController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/feature',[HomeController::class,'feature']);
Route::get('/product',[HomeController::class,'product']);
Route::get('/testimonial',[HomeController::class,'testimonial']);
Route::get('/blog',[HomeController::class,'blog']);

Route::get('detail/{id}',[Productadd::class,'detail']);
Route::get('/404', function () {
    return view('404');
});
/* productadd */

Route::get('/productadd',[Productadd::class,'index']);
Route::post('/create',[Productadd::class,'create'])->name('create');
Route::get('/read',[Productadd::class,'read']);
Route::get('edit/{id}',[Productadd::class,'edit']);
Route::post('update/{id}',[Productadd::class,'update']);
Route::get('delete/{id}',[Productadd::class,'delete']);

//Route::get('detail/{id}',[Productadd::class,'detail']);

/* Owladd */

Route::get('/owladd',[OwlController::class,'index']);
Route::post('/createowl',[OwlController::class,'create'])->name('createowl');
Route::get('/readowl',[OwlController::class,'read']);
Route::get('editowl/{id}',[OwlController::class,'edit']);
Route::post('updateowl/{id}',[OwlController::class,'update']);
Route::get('deleteowl/{id}',[OwlController::class,'delete']);

//Route::get('detail/{id}',[Productadd::class,'detail']);

/* register and login */
Route::get('register',[UserController::class,'register']); 
Route::post('registerpost',[UserController::class,'registerpost'])->name('form.register');
Route::get('login',[UserController::class,'login']);
Route::post("loginpost",[UserController::class,'loginuser']);



