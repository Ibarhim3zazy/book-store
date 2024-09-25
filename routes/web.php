<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // start admin section
    // dump('route web file');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // start dashboard section
        Route::controller(AdminController::class)->group(function () {
            // Route::resource('/', AdminController::class);
        });
        // end dashboard section
    });
    // end admin section
});
// Route::view('/dashboard', 'dashboard.index')->name('dashboard.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


