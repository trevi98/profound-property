<?php

use App\Models\Project;
use App\Models\Property;
use App\Models\Type;
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

Route::middleware('auth:api')->get('/all',function(){
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



Route::get('/types-for-nav',function(){
    $types = Type::where('show',true)->get();
    return response([
        'status' => 'success',
        'payload' => $types
    ]);
});

Route::get('/projects/featured',function(){
    $projects = Project::where('featured',true)->get();
    return response([
        'status' => 'success',
        'payload' => $projects
    ]);
});

Route::post('/create_property',function(){
    $property = null;
    try{

        $property = Property::create([
            "title" => Request()->post('title'),
            "price" => Request()->post('price'),
            "description" => Request()->post('description'),
            "cover" => Request()->post('cover'),
            "video" => Request()->post('video'),
            "area" => Request()->post('area'),
            "featured" => Request()->post('featured'),
            "location_link" => Request()->post('location_link'),
            "user_id" => Request()->post('user_id'),
            "location_id" => Request()->post('location_id'),
            "type_id" => Request()->post('type_id')
        ]);
    }catch(Exception $e){
        return response(['payload'=>$e]);

    }

    return response(['payload'=>Request()->post()]);
});
