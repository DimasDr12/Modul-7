<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home',[mahasiswaController::class,'show']);

Route::get('/tambah',[mahasiswaController::class,'tambah']);

Route::get('/tambah/tambahAction',[mahasiswaController::class,'tambahAction']);

Route::get('/edit/{id}',[mahasiswaController::class,'edit']);
Route::get('editAction',[mahasiswaController::class,'editAction']);

Route::get('/delete/{id}',[mahasiswaController::class,'delete']);
Route::get('/about',[mahasiswaController::class,'about']);
