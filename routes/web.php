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
})->name('home');


// Portfolio
Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio');

Route::get('/portfolio/pft-website', function () {
    return view('portfolio.pft-website');
});

Route::get('/portfolio/pmu-intro', function () {
    return view('portfolio.pmu-intro');
});


// Photography
Route::get('/photography', function () {
    return view('photography.index');
})->name('photography');

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
})->name('contact');



// Email Routes
Route::post('/email', 'ContactController@sendEmail')->name('email');
