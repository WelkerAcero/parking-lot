<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
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

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'authentication'])->name('validate.user');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/preloader', [SessionController::class, 'preloader'])->name('preloader');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::get('/authorization/{customer_id}', [AuthorizationController::class, 'index'])->name('authorization.index');
Route::post('/authorization/store', [AuthorizationController::class, 'store'])->name('authorization.store');
