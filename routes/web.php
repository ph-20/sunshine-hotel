<?php

use App\Service;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route Group Admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'room'], function () {
        Route::get('show', 'RoomsController@getShow');
        Route::get('edit/{id}', 'RoomsController@getEdit');
        Route::post('edit/{id}', 'RoomsController@postEdit');
        Route::get('create', 'RoomsController@getCreate');
        Route::post('create', 'RoomsController@postCreate');
        Route::get('delete/{id}', 'RoomsController@getDelete');
    });
    Route::group(['prefix' => 'roomtype'], function () {
        Route::get('show', 'RoomTypesController@getShow');
        Route::get('edit/{id}', 'RoomTypesController@getEdit');
        Route::post('edit/{id}', 'RoomTypesController@postEdit');
        Route::get('create', 'RoomTypesController@getCreate');
        Route::post('create', 'RoomTypesController@postCreate');
        Route::get('delete/{id}', 'RoomTypesController@getDelete');
    });
    Route::group(['prefix' => 'service'], function () {
        Route::get('show', 'ServicesController@getShow');
        Route::get('edit/{id}', 'ServicesController@getEdit');
        Route::post('edit/{id}', 'ServicesController@postEdit');
        Route::get('create', 'ServicesController@getCreate');
        Route::post('create', 'ServicesController@postCreate');
        Route::get('delete/{id}', 'ServicesController@getDelete');
    });
});
