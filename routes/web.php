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

//Route::get('/recovery', 'RecoveryController@index')->middleware(['web', 'guest'])->name('recovery.start');
//Route::post('/recovery', 'RecoveryController@process')->middleware(['web', 'guest'])->name('recovery.process');
//
//// recovery states.
//Route::get('/recovery/success', 'RecoveryController@success')->middleware(['web', 'auth'])->name('recovery.success');
Route::get('/recovery/failed', 'RecoveryController@failed')->middleware(['web', 'guest'])->name('recovery.failed');
