<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmController;

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
    return view('acceuille');
});
Route::get('/menu',function(){
    return view('menu');
});


Route::get('/inscription',function(){
    return view ('inscription');
});
Route::get('/liste',[AdmController::class,'index']);
Route::post('/formulaire',[AdmController::class,'store']);

