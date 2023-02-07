<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


Route::view('/','pages.home') ->name('home');

//----------------------------------------------------------------
  // stars-restaurants.com/register=> Registrar
  Route::get('/register',[RegisterController::class,'show']);

  // stars-restaurants.com/register=> Registrar -POST
Route::post('/register', [RegisterController::class,'register']);

//----------------------------------------------------------------
// stars-restaurants.com/login => Logear

Route::get('/login',[LoginController::class,'show'])->name('login');

// stars-restaurants.com/login=> login -POST
Route::post('/login', [LoginController::class,'login']);

//--------------------------Logout---------------------------------

Route::get('/logout', [LogoutController::class,'logout'])->name('logout');