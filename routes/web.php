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

Route::get('/kitsune', function () {
    return view('kitsune');
});

Route::get('/user/{id}', function ($id) {
    return \App\User::find($id);
});

Route::get('/erunda', function () {
    return view('main');
});
