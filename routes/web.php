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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/ujian', 'UjianController@index');

// Ulangans
// Route::get('/ulangans', 'UlangansController@index');
// Route::get('/ulangans/create', 'UlangansController@create');
// Route::get('/ulangans/{ulangan}', 'UlangansController@show');
// Route::post('/ulangans', 'UlangansController@store');
// Route::delete('/ulangans/{ulangan}', 'UlangansController@destroy');
// Route::get('/ulangans/{ulangan}/edit', 'UlangansController@edit');
// Route::patch('/ulangans/{ulangan}', 'UlangansController@update');

// Penyederhanaan
Route::resource('ulangans', 'UlangansController');