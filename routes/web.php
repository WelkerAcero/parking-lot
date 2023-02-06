<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VehicleController;
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

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authentication')->name('validate.user');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/preloader', 'preloader')->name('preloader');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('admin.dashboard');
});

Route::controller(AuthorizationController::class)->group(function () {
    Route::get('/authorization/{customer_id}', 'index')->name('authorization.index');
    Route::post('/authorization/store', 'store')->name('authorization.store');
});

Route::controller(CustomerController::class)->group(function () {

    Route::get('/customers',  'index')->name('customer.index');
    Route::get('/customers/create',  'create')->name('customer.create');
    Route::post('/customer/store',  'store')->name('customer.store');
    Route::delete('/customer/{customer}/delete',  'destroy')->name('customer.destroy');
    Route::get('/customer/{customer}/edit',  'edit')->name('customer.edit');
    Route::get('/customer/{customer}/update',  'update')->name('customer.update');
    Route::get('/customer/{id}/detalles',  'show')->name('customer.show');
});

Route::controller(VehicleController::class)->group(function () {
    Route::get('/vehicles', 'index')->name('vehicle.index');
});
