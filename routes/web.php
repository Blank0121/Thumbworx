<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('registers1');
});
Route::get('/registers2', function () {
    return view('registers2');
});

Route::get('/registers3', function () {
    return view('registers3');
});
Route::get('/registers4', function () {
    return view('registers4');
});
Route::get('/registers5', function () {
    return view('registers5');
}); 
Route::get('/registerscl1', function () {
    return view('registerscl1');
});
Route::get('/registerscl2', function () {
    return view('registerscl2');
});
Route::get('/registerscl3', function () {
    return view('registerscl3');
});
Route::get('/registerscl4', function () {
    return view('registerscl4');
});
Route::get('/registerscl5', function () {
    return view('registerscl5');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
