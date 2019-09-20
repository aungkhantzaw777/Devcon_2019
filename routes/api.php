<?php

use Illuminate\Http\Request;

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


Route::get('/user',function(Request $request){
    return $request->user();
})->middleware('auth:api');



Route::post('/user',function(Request $request){
    if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
        // Success
        $user = Auth::user(); 

        $token = str_random(60);
        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        $success['token'] =  $token; 
        return response()->json(['success' => $success], 200);
    } else {
        // Go back on error (or do what you want)
        return response()->json(['error'=>'Unauthorised'], 401); 
    }
    return $request['email'];
});

