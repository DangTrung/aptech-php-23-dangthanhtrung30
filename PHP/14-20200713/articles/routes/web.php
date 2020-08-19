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
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('article','ArticleController');
Route::get('article','ArticleController@index')->name('article.index');
Route::post('article','ArticleController@store')->name('article.store');
Route::get('article/create','ArticleController@create')->name('article.create');
Route::get('article/{id}','ArticleController@show')->name('article.show');
Route::put('article/{article}','ArticleController@update')->name('article.update');
Route::delete('article/{article}','ArticleController@destroy')->name('article.destroy');
Route::get('article/{article}/edit','ArticleController@edit')->name('article.edit');
