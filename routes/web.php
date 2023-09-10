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


Route::get('/', [\App\Http\Controllers\WallController::class, 'index'])->name('wall');
Route::get('/instruction', [\App\Http\Controllers\InstructionController::class, 'index'])->name('instruction');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'indexLogin'])->name('login');
Route::get('/register', [\App\Http\Controllers\UserController::class, 'indexRegister'])->name('register');
