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

Route::get('/', 'CryptoController@homepage');
Route::get('/charts', 'CryptoController@charts');
Route::get('/charts-ajax', 'CryptoController@chartsEntriesAjax');
