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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::get('/car', [App\Http\Controllers\HomeController::class, 'cardetail'])->name('cardetail');

//Auth User Routes
Auth::routes([
    'verify' => false, // Email Verification Routes...
]);
Route::get('/favs', [App\Http\Controllers\HomeController::class, 'favs'])->name('favs');

Route::get('/testdrive', [App\Http\Controllers\HomeController::class, 'testdrive'])->name('testdrive');

Route::get('/pasttestdrives', [App\Http\Controllers\HomeController::class, 'testdrivesbooked'])->name('pasttestdrives');

Route::get('/calemi', [App\Http\Controllers\HomeController::class, 'calemi'])->name('calemi');


