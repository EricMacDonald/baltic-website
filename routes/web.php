<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// Routes in Use

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'viewAboutUs'])->name('aboutus');
Route::get('/how-to', [HomeController::class, 'viewHowTo'])->name('howTo');
Route::get('/suggestions', [HomeController::class, 'viewSuggestions'])->name('suggestions');
Route::get('/top-trumps', [HomeController::class, 'viewTopTrumps'])->name('topTrumps');


Route::post('/create/user', [RegisteredUserController::class, 'store'])->name('user.create');


// Could use tthe below middlewhere group to ensure a user is logged in to access particular pages. In this case I have not done this.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
