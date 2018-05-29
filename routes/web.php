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
Route::get('/', 'LoginController@getLogin')->name('/');
Route::post('/login', 'LoginController@postLogin')->name('login');

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout', 'LoginController@getLogout')->name('logout');
	Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['Admin']],function(){
	// Route unutk menampilkan data program kursus
Route::get('/program', 'ProgramController@index')->name('program.index');

//Route untuk menampilkan form tambah data program kursus
Route::get('/program/tambah', 'ProgramController@create')->name('program.create');

//Route untuk menyimpan data Program kursus
Route::post('/program/tambah', 'ProgramController@store')->name('program.store');

//Route unutk menampilkan form edit data program kursus
Route::get('/program/{program}/edit', 'ProgramController@edit')->name('program.edit');

//Route untuk menyimpan data program kursus yang telah diedit
Route::patch('/program/{program}/edit', 'ProgramController@update')->name('program.update');

//Route untuk menghapus data program kursus
Route::delete('/program/{program_id}/delete', 'ProgramController@destroy')->name('program.destroy');

});

