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


// Home
Route::get('/', function () {
    return view('home.home');
});


// Portfolio
Route::get('/portfolio', function () {
    return view('portfolio.index');
});


// Photography
Route::get('/photography', function () {
    return view('photography.index');
});

Route::get('/photography/weddings', function () {
    return view('photography.weddings');
});

Route::get('/photography/portraits', function () {
    return view('photography.portraits');
});

Route::get('/photography/point-n-shoot', function () {
    return view('photography.point-n-shoot');
});


// Blog
Route::get('/blog', function () {
    return view('blog.index');
});


// Contact
Route::get('/contact', function () {
    return view('contact.index');
});
