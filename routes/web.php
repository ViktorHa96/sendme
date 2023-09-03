<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [\App\Http\Controllers\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('register');
    Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store');
});

Route::group(['middleware' => 'auth'], function () {
});
require __DIR__.'/auth.php';

Route::get('/', [\App\Http\Controllers\WallController::class, 'index'])->name('wall');
