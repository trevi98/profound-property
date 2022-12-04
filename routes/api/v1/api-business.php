<?php

use App\Models\Amenity;
use App\Models\Community_amenity;
use App\Models\Developer;
use App\Models\Location;
use App\Models\Payment_plan;
use App\Models\Project;
use App\Models\Project_img;
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
Route::get('/amenities',function(){
    return response(['payload'=>Amenity::all()]);
});
Route::get('/comunity_amenities',function(){
    return response(['payload'=>Community_amenity::all()]);
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
Route::post('/create_project',function(){
    $project = null;
    try{

        $project = Project::create([
            "title" => Request()->post('title'),
            "price" => Request()->post('price'),
            "description" => Request()->post('description'),
            "cover" => Request()->post('cover'),
            "left" => Request()->post('left'),
            "right" => Request()->post('right'),
            "front" => Request()->post('front'),
            "back" => Request()->post('back'),
            "dld" => Request()->post('dld'),
            "video" => Request()->post('video'),
            "completion_date" => Request()->post('completion_date'),
            "starting_date" => Request()->post('starting_date'),
            "area" => Request()->post('area'),
            "featured" => Request()->post('featured'),
            "location_link" => Request()->post('locationLink'),
            "stores" => Request()->post('stores'),
            "appartments_in_store" => Request()->post('appartments_in_store'),
            "number_of_unites_available" => Request()->post('number_of_unites_available'),
            "user_id" => Request()->post('user_id'),
            "developer_id" => Request()->post('developer_id'),
            "project_status_id" => Request()->post('status_id'),
            "location_id" => Request()->post('location_id'),
            "type_id" => Request()->post('type_id')
        ]);
    }catch(Exception $e){
        return response(['payload'=>$e]);

    }

    try{

        foreach(Request()->post('paymenPlans') as $payment){
            Payment_plan::create( ['title'=>$payment['title'],'pricentage'=>$payment['precentages'],'project_id'=>$project->id]);
        }

    }catch(Exception $e){
        return response(['payload'=>$e]);

    }

    if(count(Request()->post('images')) > 0){

        try{

            foreach(Request()->post('images') as $image){
                Project_img::create( ['img'=>$image,'project_id'=>$project->id]);
            }

        }catch(Exception $e){
            return response(['payload'=>$e]);

        }
    }

    // if(count(Request()->post('amenities')) > 0){

    //     try{

    //         foreach(Request()->post('amenities') as $amenity){
    //             Project_img::create( ['title'=>$amenity,'project_id'=>$project->id]);
    //         }

    //     }catch(Exception $e){
    //         return response(['payload'=>$e]);

    //     }
    // }

    // if(Request()->post('right') != null){

    //     try{

    //         foreach(Request()->post('images') as $image){
    //             Project_img::create( ['img'=>$image,'project_id'=>$project->id]);
    //         }

    //     }catch(Exception $e){
    //         return response(['payload'=>$e]);

    //     }
    // }

    // foreach($projects)



    return response(['payload'=>Request()->post()]);

});
