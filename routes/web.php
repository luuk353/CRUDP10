<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\HighscoreController;
use App\Http\Controllers\NewsPostsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\UserController;

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

Route::get('user/dashboard', [UserController::class, 'dashbord'])->middleware(['user'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profilepic', [ProfileController::class, 'updateprofilepic'])->name('profile.updateprofilepic');
});

Route::resource('reviews', ReviewController::class)->middleware(['auth', 'user']);
Route::resource('shop', shopController::class)->middleware(['auth', 'user']);

Route::resource('events', EventsController::class)->middleware('auth');

Route::resource('highscore', HighscoreController::class)->middleware('auth');

Route::get('/userhighscore', [HighscoreController::class, 'userhighscore'])->middleware('auth')->name('userhighscore');

Route::prefix('achievements')->controller(AchievementController::class)->group(function () {
   Route::get('/', [AchievementController::class, 'index'])->name('achievements.index');
    Route::get('/user', [AchievementController::class, 'myAchievements'])->name('achievements.user')->middleware(['auth', 'user']);
    Route::get('/create', [AchievementController::class, 'create'])->name('achievements.create')->middleware('admin');
    Route::post('/', [AchievementController::class, 'store'])->name('achievements.store')->middleware('admin');
    Route::get('/{achievement}', [AchievementController::class, 'show'])->name('achievements.show');
    Route::get('/{achievement}/edit', [AchievementController::class, 'edit'])->name('achievements.edit')->middleware('admin');
    Route::patch('/{achievement}', [AchievementController::class, 'update'])->name('achievements.update')->middleware('admin');
    Route::delete('/{achievement}', [AchievementController::class, 'destroy'])->name('achievements.destroy')->middleware('admin');
});

//admin routes
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

Route::get('/news',[NewsPostsController::class,'index']);
Route::resource('/forum', ForumController::class);

require __DIR__.'/auth.php';
