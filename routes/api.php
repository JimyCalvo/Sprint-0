<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;



//----------------------------------------------------------------
  // starqfood.com/register=> Registrar
  Route::post('register',[AuthController::class,'register']);
  // starqfood.com/login=> Inciar Sesión
  Route::post('login',[AuthController::class,'login']);
