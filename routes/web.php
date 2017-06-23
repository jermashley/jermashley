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
    return view('home.home');
});

Route::get('/photography', function () {
    return view('photography.index');
});

Route::get('/photography/weddings', function () {
    return view('photography.weddings');
});

Route::get('/photography/family', function () {
    return view('photography.family');
});

Route::get('/photography/portraits', function () {
    return view('photography.portraits');
});
