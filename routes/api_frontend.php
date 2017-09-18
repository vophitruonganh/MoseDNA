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

//Route::group(['middleware' => 'web'],function(){
    Route::get('/v1.0/posts',"PostController@getAllPosts");
//    Route::get('/v1.0/posts',"PostController@getAllPosts");
//});

