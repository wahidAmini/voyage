<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', "App\Http\Controllers\StaticController@home")->name('home');

Route::get('about', function () {
    return view('voyage/about');
});

Route::get('contact', function () {
    return view('voyage/contact');
});

Route::get('trips', [StaticController::class, 'trips'])->name('trips');

Route::get('tripdetail/{id?}', [StaticController::class, 'trip'])->name('tripdetail');
