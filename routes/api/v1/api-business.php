<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/test',function(){
    return response(['users'=>User::all()]);
});


Route::post('login',function(){
    $login = Request()->validate([
        "email" => "required|email|string",
        "password" => "required|string"
    ]);
    if(!Auth::attempt(($login))){
        return response(['message'=>'wrong credentiols']);
    }
    $accessToken = Auth::user()->createToken('authToken')->accessToken;
    return response(['user'=>Auth::user(),'accessToken'=>$accessToken]);

});

Route::post('login-agent',function(){
    $login = Request()->validate([
        "email" => "required|email|string",
        "password" => "required|string"
    ]);
    if(!Auth::attempt(($login))){
        return response(['message'=>'wrong credentiols'],400);
    }
    if(!Auth::user()->role->title == 'agent' && !Auth::user()->role->title == 'admin'){
        return response(['message'=>'You are not authorized!'],400);
    }
    $accessToken = Auth::user()->createToken('authToken')->accessToken;
    return response(['user'=>Auth::user(),'accessToken'=>$accessToken]);

});
