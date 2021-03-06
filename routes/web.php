<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/editdata/{id}','HomeController@update');
Route::get('/data-teknisi','userController@teknisi');
Route::get('/add-teknis','userController@add');
Route::post('/add-teknisi','userController@store');
Route::post('/resetpass/{id}','passcontroller@update');


