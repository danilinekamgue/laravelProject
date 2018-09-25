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


Route::get('/', 'CommentoController@index');
Route::get('/', 'ExpenseController@index');


// Tutte le rotte descritte sopra equivalgono a questo:
Route::resource('expense', 'ExpenseController', ['except' => ['destroy', 'update']]);
Route::resource('commento', 'CommentoController', ['except' => ['destroy', 'update']]);

// Devo personalizzare 2 rotte per comodità
Route::get('expense/{id}/destroy',  'ExpenseController@destroy');
Route::post('expense/{id}',          'ExpenseController@update');

Route::get('commento/{id}/destroy',  'CommentoController@destroy');
Route::post('commento/{id}',          'CommentoController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


