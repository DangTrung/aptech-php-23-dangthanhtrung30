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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/users','UserController');
// Route::get('users','UserController@index ')->name('users.index'); 
// Route::post('users ','UserController@store ')->name('users.store');
// Route::get('users/create ','UserController@create')->name('users.create');
// Route::get('users/{user}','UserController@show ')->name('users.show');
// Route::put('users/{user}','UserController@update')->name('users.update');
// Route::delete('users/{user}','UsersController@destroy')->name('users.destroy');
// Route::get('users/{user}/edit ','UsersController@edit')->name('users.edit'); 