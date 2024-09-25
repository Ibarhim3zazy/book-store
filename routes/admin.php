<?php

use App\Models\Merchant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MerchantController;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('front.index');
// });

// dump('route admin file');


    // start admin section
    
    Route::middleware('admin_auth')->prefix('dashboard')->name('dashboard.')->group(function () {
        // start dashboard section
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::controller(RoleController::class)->group(function () {
            Route::resource('/roles', RoleController::class);
        });
        Route::controller(AdminController::class)->group(function () {
            Route::resource('/admins', AdminController::class);
        });
        Route::controller(MerchantController::class)->group(function () {
            Route::resource('/merchants', MerchantController::class);
        });
        Route::controller(UserController::class)->group(function () {
            Route::resource('/users', UserController::class);
        });
        // end dashboard section
    });

    Route::prefix('auth')->name('auth.')->group(function () {
        // start auth section
        // Route::controller(AdminController::class)->group(function () {
        //     Route::resource('admins', AdminController::class);
        // });
        // end auth section
        require __DIR__.'/adminAuth.php';
    });

    // end admin section




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
