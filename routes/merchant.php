<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Merchant\MerchantController;

/*
|--------------------------------------------------------------------------
| merchant Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    // start merchant section
    
    Route::middleware('merchant_auth')->prefix('dashboard')->name('dashboard.')->group(function () {
        // start dashboard section
        Route::controller(MerchantController::class)->group(function () {
            Route::resource('/', MerchantController::class);
        });
        // end dashboard section
    });

    Route::prefix('auth')->name('auth.')->group(function () {
        // start auth section
        Route::controller(MerchantController::class)->group(function () {
            Route::resource('merchants', MerchantController::class);
        });
        // end auth section
        require __DIR__.'/merchantAuth.php';
    });

    // end merchant section
