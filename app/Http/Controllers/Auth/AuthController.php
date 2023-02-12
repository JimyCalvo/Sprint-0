<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\ProfileRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
  public function register(RegisterRequest $request){
    $user=User::create($request->validated());
    
    return response()->json($user);
  }

  public function login(LoginRequest $request){
    $user=User::create($request->validated());
    return response()->json($user);
  }
  public function userProfile(ProfileRequest $request){
    $user=User::create($request->validated());
    return response()->json($user);
  }
}
