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
    $pass = '123456';
    echo 'Mat khau la:'. $pass. '<br>';
    echo 'Mat khau la:'. bcrypt($pass);
    exit;
    return view('welcome');
});

Auth::routes();

// Route Group Admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'room'], function () {
        Route::get('show', 'RoomController@getShow');
        Route::get('edit/{id}', 'RoomController@getEdit');
        Route::post('edit/{id}', 'RoomController@postEdit');
        Route::get('create', 'RoomController@getCreate');
        Route::post('create', 'RoomController@postCreate');
        Route::get('delete/{id}', 'RoomController@getDelete');
    });
    Route::group(['prefix' => 'roomtype'], function () {
        Route::get('show', 'RoomTypeController@getShow');
        Route::get('edit/{id}', 'RoomTypeController@getEdit');
        Route::post('edit/{id}', 'RoomTypeController@postEdit');
        Route::get('create', 'RoomTypeController@getCreate');
        Route::post('create', 'RoomTypeController@postCreate');
        Route::get('delete/{id}', 'RoomTypeController@getDelete');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'users.index', 'uses' => 'UserController@home']);
        Route::get('index', ['as' => 'users.index', 'uses' => 'UserController@index']);
        Route::get('changepassword/{id}', ['as' => 'users.changepassword', 'uses' => 'UserController@changepassword']);
        Route::post('updatepassword/{user}', ['as' => 'users.updatepassword', 'uses' => 'UserController@updatepassword']);
        Route::get('edit/{id}', ['as' => 'users.edit', 'uses' => 'UserController@edit']);
        Route::post('{user}', ['as' => 'users.update', 'uses' => 'UserController@update']);
        Route::delete('{user}', ['as' => 'users.destroy', 'uses' => 'UserController@delete']);
    });
});
