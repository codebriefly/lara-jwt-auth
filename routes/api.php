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

Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');

Route::middleware('jwt.auth')->group(function(){
    
    Route::get('logout', 'API\AuthController@logout');

});


// API Route

// Route::prefix('v1')->namespace('API')->group(function () {

//     Route::get('login', function(Request $request) {
//       return response()->json(['error'=>'Unauthorized Access']);
//     });
  
//     Route::post('/login','AuthController@postLogin');
//     Route::post('/register','AuthController@postRegister');
  
//     Route::middleware('APIToken')->group(function () {
//       Route::post('/logout','AuthController@postLogout');
//     });
  
//   });
  
//   