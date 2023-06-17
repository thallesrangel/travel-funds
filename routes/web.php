<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\signInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\TravelController;
use App\Http\Middleware\Authenticated;
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
Route::get('/', [ HomeController::class, 'index' ])->name('public.home');
Route::get('/login', [ signInController::class, 'index' ])->name('public.signIn');
Route::post('/login/validation', [ SignInController::class, 'validation' ])->name('public.signIn.validation');


Route::get('/sign-up', [ signUpController::class, 'index' ])->name('sign.up');
Route::post('/sign-up/store', [ SignUpController::class, 'store' ])->name('sign.up.store');

Route::middleware([Authenticated::class])->group(function () {

    Route::prefix('app')->group(function () {
        Route::get('/', [ DashboardController::class, 'index' ])->name('dashboard');
        Route::get('/travel', [ TravelController::class, 'index' ])->name('travel');


        Route::prefix('customer')->group(function () {
            Route::get('/', [ CustomerController::class, 'index' ])->name('customer');
            Route::get('/create', [ CustomerController::class, 'create' ])->name('customer.create');
            Route::post('/store', [ CustomerController::class, 'store' ])->name('customer.store');
            Route::get('/delete/{id}', [ CustomerController::class, 'delete'])->name('customer.delete');
        });
    });

    Route::get('/sign-out', [ SignOutController::class, 'index'])->name('sign.out');
});