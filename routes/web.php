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
    return view('welcome');
});
Route::get('home', function () {
    return view('voyage/home');
});
Route::get('about', function () {
    return view('voyage/about');
});
Route::get('contact', function () {
    return view('voyage/contact');
});
Route::get('trips', function () {
    return view('voyage/trips');
});
Route::get('tripdetail', function () {
    return view('voyage/tripdetail');
});
