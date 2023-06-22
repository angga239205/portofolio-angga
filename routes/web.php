<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\portofolioController;
use App\Http\Controllers\IndexController;

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
Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('index',[IndexController::class,'show']);

Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);

Route::get('/template', function () {
    return view('template');
});

Route::get('profil',[ProfilController::class,'show']);
Route::post('profil/create',[ProfilController::class,'create']);
Route::get('profil/{id}',[ProfilController::class,'edit']);
Route::post('profil/{id}',[ProfilController::class,'update']);

Route::get('portofolio',[portofolioController::class,'show']);
Route::get('portofolio/add',[portofolioController::class,'add']);
Route::post('portofolio/create',[portofolioController::class,'create']);
Route::get('portofolio/hapus/{id}',[portofolioController::class,'hapus']);
Route::get('portofolio/edit/{id}',[portofolioController::class,'edit']);
Route::post('portofolio/update/{id}',[portofolioController::class,'update']);
Route::post('portofolio/cari/{id}',[portofolioController::class,'search']);

