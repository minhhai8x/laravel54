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

Route::get('/demo/{title?}', 'DemoController@index');
Route::post('/demo', 'DemoController@postData');

Route::resource('/demo', 'DemoController');

Route::any('/demo', function () {
    //
});