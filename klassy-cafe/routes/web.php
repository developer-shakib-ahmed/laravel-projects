<?php

use App\Http\Controllers\FoodMenuController;
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


/**
 * Route without auth
 */
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('policy', function () {
    return view('policy');
})->name('policy');

Route::get('terms', function () {
    return view('terms');
})->name('terms');


/**
 * Auth route by sanctum
 */
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::prefix('dashboard')->group(function () {
        Route::get('/foodmenu', [FoodMenuController::class, 'show'])->name('foodmenu');
    });

    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');

});



/**
 * Testing route
 */
Route::view('livewire', 'livewire-test');

