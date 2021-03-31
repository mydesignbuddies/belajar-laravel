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
    return view('homePage');
});

Route::get('/facilities', function () {
    return view('facilitiesPage');
});

Route::get('/galleries', function () {
    return view('galleriesPage');
});
