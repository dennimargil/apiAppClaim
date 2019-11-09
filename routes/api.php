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


// estas rutas se pueden acceder sin proveer de un token válido.
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
// estas rutas requiren de un token válido para poder accederse.
Route::group(['middleware' => 'jwt.auth'], function () {
	
    Route::post('/logout', 'AuthController@logout');

    Route::resource('peoples', 'PeopleController');
    Route::resource('subjects', 'SubjectController');
    Route::resource('sections', 'SectionController');
    Route::resource('resources', 'ResourceController');
    Route::resource('periods', 'PeriodController');

});
