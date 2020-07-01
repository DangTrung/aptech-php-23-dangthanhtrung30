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
Route::get('/1', function () {
    return view('welcome1');
});
Route::get('/', function () {
    return view('welcome2');
});
Route::get('/3', function () {
    return view('welcome3');
});
Route::get('/4', function () {
    return view('welcome4');
});
Route::get('/5', function () {
    return view('welcome5');
});

