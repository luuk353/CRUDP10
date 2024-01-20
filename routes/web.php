<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HighscoreController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profilepic', [ProfileController::class, 'updateprofilepic'])->name('profile.updateprofilepic');
});

Route::resource('reviews', ReviewController::class)->middleware('auth');

Route::resource('events', EventsController::class)->middleware('auth');

Route::resource('highscore', HighscoreController::class)->middleware('auth');

Route::get('/userhighscore', [HighscoreController::class, 'userhighscore'])->middleware('auth')->name('userhighscore');

Route::prefix('admin')->middleware(['admin', 'auth'])->group( function() {
    Route::get('index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('reviews', [AdminController::class, 'reviews'])->name('admin.reviews');
    Route::get('create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('create', [AdminController::class, 'store'])->name('admin.store');
    Route::get('{admin}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::patch('{admin}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

require __DIR__.'/auth.php';
