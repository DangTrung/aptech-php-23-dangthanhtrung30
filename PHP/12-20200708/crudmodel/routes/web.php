

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
Route::resource('users','UserController');
Route::get('/users','UserController@index');

Route::post('/users','UserController@store');
Route::get('/users/create','UserController@create');
Route::get('/users/{user}','UserController@show')->name('users.show');
Route::put('users/{user}','UserController@update');
Route::delete('users/{user}','UserController@destroy');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::patch('/users/{user}', 'UserController@update'); 