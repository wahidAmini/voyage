<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\TripController;

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

// ADMIN PART GROUPED
Route::prefix('admin')->group(function () {
    Route::get('trips', [TripController::class, 'index'])->name('admin/trips');

    Route::get('trips/create', [TripController::class, 'create'])->name('admin.trips.create');

    Route::post('trips/store', [TripController::class, 'store'])->name('admin.trips.store');

    // out of groupe 
    // Route::get('tripdetail/{id?}', [TripController::class, 'show'])->name('admin.trip.show');

    Route::get('comments', function () {
        return "Page admin/comment";
    });
    Route::get('plan', function () {
        return "Page admin/plan";
    });
});
