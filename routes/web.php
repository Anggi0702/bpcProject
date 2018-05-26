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
    return view('layouts.master');
});

Route::get('/program', 'ProgramController@index')->name('program.index');
Route::get('/program/tambah', 'ProgramController@create')->name('program.create');
Route::post('/program/tambah', 'ProgramController@store')->name('program.store');

Route::delete('/program/{program}/delete', 'ProgramController@destroy')->name('program.destroy');
