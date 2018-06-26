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

Auth::routes();
Route::get('/', 'OverviewController@index')->middleware(['auth', 'web'])->name('overview');
Route::post('/convert', 'ConvertController@checkout')->middleware(['auth', 'web'])->name('checkout');

