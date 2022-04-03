<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});



Route::get('/about', function () {
    return view('about');
});



Route::get('/companies', function () {
    return view('companies');
});



Route::get('/Contact-us', function () {
    return view('Contact-us');
});


Route::get('/create-account', function () {
    return view('create-account');
});



Route::get('/Jobs-details', function () {
    return view('Jobs-details');
});


Route::get('/Jobs', function () {
    return view('Jobs');
});


Route::get('/Services', function () {
    return view('Services');
});

Route::get('/Sign-up', function () {
    return view('Sign-up');
});


Route::get('/Sign-up', function () {
    return view('Sign-up');
});
