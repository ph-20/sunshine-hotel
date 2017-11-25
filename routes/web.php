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

Route::group(['prefix' => 'seachroom'], function () {
    Route::get('/seachroomfor2people', ['as' => 'seachroom.seachroomfor2people', 'uses' => 'RoomController@seachroomfor2people']);
});

Auth::routes();

// Route Group Admin
Route::group(['prefix' => 'admin'], function () {
    // Route Group Room
    Route::group(['prefix' => 'rooms'], function () {
        Route::get('list', ['as' => 'rooms.index', 'uses' => 'RoomController@getList']);
        Route::get('edit/{id}', ['as' => 'rooms.edit', 'uses' => 'RoomController@getEdit']);
        Route::post('edit/{id}', ['as' => 'rooms.update', 'uses' => 'RoomController@postEdit']);
        Route::get('create', ['as' => 'rooms.create', 'uses' => 'RoomController@getCreate']);
        Route::post('create', ['as' => 'rooms.store', 'uses' => 'RoomController@postCreate']);
        Route::get('delete/{id}', ['as' => 'rooms.destroy', 'uses' => 'RoomController@getDelete']);
    });
    // Route Group Room Type
    Route::group(['prefix' => 'roomtypes'], function () {
        Route::get('list', ['as' => 'roomtypes.index', 'uses' => 'RoomTypeController@getList']);
        Route::get('edit/{id}', ['as' => 'roomtypes.edit', 'uses' => 'RoomTypeController@getEdit']);
        Route::post('edit/{id}', ['as' => 'roomtypes.update', 'uses' => 'RoomTypeController@postEdit']);
        Route::get('create', ['as' => 'roomtypes.create', 'uses' => 'RoomTypeController@getCreate']);
        Route::post('create', ['as' => 'roomtypes.store', 'uses' => 'RoomTypeController@postCreate']);
        Route::get('delete/{id}', ['as' => 'roomtypes.destroy', 'uses' => 'RoomTypeController@getDelete']);
    });
    // Route Group Service
    Route::group(['prefix' => 'services'], function () {
        Route::get('list', ['as' => 'services.index', 'uses' => 'ServiceController@getList']);
        Route::get('edit/{id}', ['as' => 'services.edit', 'uses' => 'ServiceController@getEdit']);
        Route::post('edit/{id}', ['as' => 'services.update', 'uses' => 'ServiceController@postEdit']);
        Route::get('create', ['as' => 'services.create', 'uses' => 'ServiceController@getCreate']);
        Route::post('create', ['as' => 'services.store', 'uses' => 'ServiceController@postCreate']);
        Route::get('delete/{id}', ['as' => 'services.destroy', 'uses' => 'ServiceController@getDelete']);
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'users.index', 'uses' => 'UserController@home']);
        Route::get('index', ['as' => 'users.index', 'uses' => 'UserController@index']);
        Route::get('changepassword/{id}', ['as' => 'users.changepassword', 'uses' => 'UserController@changepassword']);
        Route::post('updatepass/{user}', ['as' => 'users.updatepass', 'uses' => 'UserController@updatepassword']);
        Route::get('edit/{id}', ['as' => 'users.edit', 'uses' => 'UserController@edit']);
        Route::post('{user}', ['as' => 'users.update', 'uses' => 'UserController@update']);
        Route::delete('{user}', ['as' => 'users.destroy', 'uses' => 'UserController@delete']);
    });
    Route::group(['prefix' => 'promotions'], function () {
        Route::get('/', ['as' => 'promotions.index', 'uses' => 'PromotionController@home']);
        Route::get('index', ['as' => 'promotions.index', 'uses' => 'PromotionController@index']);
        Route::get('create', ['as' => 'promotions.create', 'uses' => 'PromotionController@create']);
        Route::post('/', ['as' => 'promotions.save', 'uses' => 'PromotionController@save']);
        Route::delete('{promotion}', ['as' => 'promotions.destroy', 'uses' => 'PromotionController@delete']);
    });
});
Route::group(['prefix' => 'home'], function () {
    Route::get('/', function () {
        return view('hotel.layouts.headermenu');
    });
    Route::group(['prefix' => 'seachroom'], function () {
        Route::get('/seachroomfor2people', ['as' => 'seachroom.seachroomfor2people', 'uses' => 'RoomController@seachroomfor2people']);
        Route::get('/seachroomfor4people', ['as' => 'seachroom.seachroomfor4people', 'uses' => 'RoomController@seachroomfor4people']);
        Route::get('/seachroomfor6people', ['as' => 'seachroom.seachroomfor6people', 'uses' => 'RoomController@seachroomfor6people']);
        Route::get('/seachroomtypevip', ['as' => 'seachroom.seachroomtypevip', 'uses' => 'RoomController@seachroomtypevip']);
        Route::get('/seachroomtypedeluxe', ['as' => 'seachroom.seachroomtypedeluxe', 'uses' => 'RoomController@seachroomtypedeluxe']);
        Route::get('/seachroomtypefamily', ['as' => 'seachroom.seachroomtypefamily', 'uses' => 'RoomController@seachroomtypefamily']);
        Route::get('/seachroomtypefamily', ['as' => 'seachroom.seachroomtypefamily', 'uses' => 'RoomController@seachroomtypefamily']);
        Route::get('/detailallroom', ['as' => 'seachroom.detailallroom', 'uses' => 'RoomController@detailallroom']);
        Route::get('/detailroom/{id}', ['as' => 'seachroom.detailroom', 'uses' => 'RoomController@detailroom']);
        Route::post('/seach', ['as' => 'seachroom.showroom', 'uses' => 'RoomController@seachroom']);
    });
});
