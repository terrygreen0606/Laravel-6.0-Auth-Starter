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
//     return view('welcome');
// });
Route::get('/', 'IndexController@index');
Route::get('/about', 'AboutController@index');
Route::get('/services', 'ServicesController@index');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index');
