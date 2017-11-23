<?php

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
    // Route Group Room
    Route::group(['prefix' => 'room'], function () {
        Route::get('list', 'RoomsController@getList');
        Route::get('edit/{id}', 'RoomsController@getEdit');
        Route::post('edit/{id}', 'RoomsController@postEdit');
        Route::get('create', 'RoomsController@getCreate');
        Route::post('create', 'RoomsController@postCreate');
        Route::get('delete/{id}', 'RoomsController@getDelete');
    });
    // Route Group Room Type
    Route::group(['prefix' => 'roomtype'], function () {
        Route::get('list', 'RoomTypesController@getList');
        Route::get('edit/{id}', 'RoomTypesController@getEdit');
        Route::post('edit/{id}', 'RoomTypesController@postEdit');
        Route::get('create', 'RoomTypesController@getCreate');
        Route::post('create', 'RoomTypesController@postCreate');
        Route::get('delete/{id}', 'RoomTypesController@getDelete');
    });
    // Route Group Service
    Route::group(['prefix' => 'service'], function () {
        Route::get('list', 'ServicesController@getList');
        Route::get('edit/{id}', 'ServicesController@getEdit');
        Route::post('edit/{id}', 'ServicesController@postEdit');
        Route::get('create', 'ServicesController@getCreate');
        Route::post('create', 'ServicesController@postCreate');
        Route::get('service', 'ServicesController@getCreate');
        Route::post('create', 'ServicesController@postCreate');
        Route::get('delete/{id}', 'ServicesController@getDelete');
    });
});
