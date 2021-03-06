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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'Auth\RegisterController@index')->name('register')->middleware('auth', 'role:admin');

Route::get('ficha/create', ['as' => 'sheet.create', 'uses' => 'Sheet\SheetController@create']);
Route::post('ficha', ['as' => 'sheet.store', 'uses' => 'Sheet\SheetController@store']);