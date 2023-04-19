<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Artisan;
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
    Route::get('/', 'index', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
    })->name('login');
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authentication')->name('validate.user');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/preloader', 'preloader')->name('preloader');
});

Route::controller(PasswordResetController::class)->group(function () {

    Route::get('/forgot-password', 'index')->name('pass.request');
    Route::post('/request-password', 'reset')->name('send.link');

    Route::get('/reset-password/{token}', 'changePassView')->name('password.reset');
    Route::post('/reset-password', 'changePass')->name('change.pass');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('admin.dashboard');
});

Route::controller(AuthorizationController::class)->group(function () {
    Route::get('/authorizations', 'index')->name('authorization.index');
    Route::get('/authorization/{customer_id}', 'create')->name('authorization.create');
    Route::get('/authorizations/current_cars', 'getCurrentParkedCars')->name('authorization.current');
    Route::post('/authorization/store', 'store')->name('authorization.store');
    Route::post('/authorization/filter', 'getFilteredData')->name('authorization.filter');
});

Route::controller(CustomerController::class)->group(function () {

    Route::get('/customers',  'index')->name('customer.index');
    Route::get('/customers/create',  'create')->name('customer.create');
    Route::post('/customer/store',  'store')->name('customer.store');
    Route::delete('/customer/{customer}/delete',  'destroy')->name('customer.destroy');
    Route::get('/customer/{customer}/edit',  'edit')->name('customer.edit');
    Route::put('/customer/{customer}/update',  'update')->name('customer.update');
    Route::get('/customer/{id}/detalles',  'show')->name('customer.show');
});

Route::controller(VehicleController::class)->group(function () {
    Route::get('/vehicles', 'index')->name('vehicle.index');
    Route::get('/vehicles/create',  'create')->name('vehicle.create');
    Route::post('/vehicle/store',  'store')->name('vehicle.store');
    Route::delete('/vehicle/{vehicle}/delete',  'destroy')->name('vehicle.destroy');
    Route::get('/vehicle/{vehicle}/edit',  'edit')->name('vehicle.edit');
    Route::put('/vehicle/{vehicle}/update',  'update')->name('vehicle.update');
    // Route::get('/vehicle/{id}/detalles',  'show')->name('vehicle.show');
});


Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('user.index');
    Route::get('/user/create',  'create')->name('user.create');
    Route::post('/user/store',  'store')->name('user.store');
    Route::delete('/user/{user}/delete',  'destroy')->name('user.destroy');
    Route::get('/user/{user}/edit',  'edit')->name('user.edit');
    Route::put('/user/{user}/update',  'update')->name('user.update');
    // Route::get('/vehicle/{id}/detalles',  'show')->name('vehicle.show');
});
