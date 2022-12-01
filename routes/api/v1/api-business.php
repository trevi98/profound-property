<?php

use App\Models\Developer;
use App\Models\Location;
use App\Models\Project_status;
use App\Models\Size;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return response(['user'=>Auth::user(),'accessToken'=>$accessToken,'roleTitle'=>Auth::user()->role->title]);

});

Route::get('/locations',function(){
    return response(['payload'=>Location::all()]);
});
Route::get('/developers',function(){
    return response(['payload'=>Developer::all()]);
});
Route::get('/types',function(){
    return response(['payload'=>Type::all()]);
});
Route::get('/sizes',function(){
    return response(['payload'=>Size::where('size_id',Request()->get('type_id'))]);
});
Route::get('/project-status',function(){
    return response(['payload'=>Project_status::all()]);
});
Route::post('/upload_file',function(){
    header('Access-Control-Allow-Origin: *');
    // $file = base64_encode(file_get_contents(Request()->post('file')));
    $fileName = uniqid().time().'.'.Request()->file('file')->getClientOriginalExtension();
    Request()->file('file')->move(public_path('images'), $fileName);
    Storage::put('txt11.txt', json_encode(Request()->file('file')));
    return response(['payload'=>$fileName]);

});
Route::post('/upload_multiple_file',function(){
    header('Access-Control-Allow-Origin: *');
    $files = [];
    $counter = 0;
    // $file = base64_encode(file_get_contents(Request()->post('file')));
    foreach(Request()->file('files') as $file){

        $fileName = uniqid().time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);
        Storage::put('txt11.txt', json_encode(Request()->file('file')));
        $files[$counter] = $fileName;
        $counter++;
    }
    return response(['payload'=>$files]);

});
