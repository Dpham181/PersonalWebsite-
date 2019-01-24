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

Route::get('/', 'layoutcontroller@home' );
Route::get('/edu', 'layoutcontroller@education' );
Route::get('/me', 'layoutcontroller@memo' );


// for model databases resourcebundle_count

// make controller and make model


Route::resource('datas', 'mydatabase');
