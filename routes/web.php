<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimeReviewController;
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
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/anime-reviews', AnimeReviewController::class, ['names' => [
    'index' => 'anime-reviews.index',
    'show' => 'anime-reviews.show',
    'create' => 'anime-reviews.create',
    'store' => 'anime-reviews.store',
    'edit' => 'anime-reviews.edit',
    'update' => 'anime-reviews.update',
    'destroy' => 'anime-reviews.destroy',
]])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
