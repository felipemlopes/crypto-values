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

/* Homepage */

Route::get('/', 'CryptoController@homepage');

/* Charts */

Route::get('/charts', 'ChartsController@index');
Route::get('/charts-ajax', 'ChartsController@chartsEntriesAjax');

/* Trading calculator */

Route::get('/calculator', 'CalculatorController@index');
