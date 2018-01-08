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

Route::group(['middleware'=>[ 'auth:api']], function () {
	
	Route::get('/user', function (Request $request) {
		return $request->user();
	})->middleware('auth:api');
	
	Route::resource('/classes', 'Api\ClassesController');   
	Route::resource('/years', 'Api\YearsController');   
	Route::resource('/schools', 'Api\SchoolsController');   
	Route::resource('/notices', 'Api\NoticesController');   
	Route::resource('/videocategories', 'Api\VideoCategoriesController');   
	Route::resource('/videos', 'Api\VideosController');   
	Route::resource('/filecategories', 'Api\FileCategoriesController');   
	Route::resource('/files', 'Api\FilesController');   
});