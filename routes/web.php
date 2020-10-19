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
Route::get('/colleague', 'ColleagueController@index')->name('colleague.index');
Route::post('/colleague', 'ColleagueController@store')->name('colleague.store');
Route::get('/colleague/{id}/edit', 'ColleagueController@edit')->name('colleague.edit');
Route::put('/colleague/{id}', 'ColleagueController@update')->name('colleague.update');
