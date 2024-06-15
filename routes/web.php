<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about',[ProfileController::class, 'index'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   // Route::get('/profile1', [ProfileController::class, 'edit'])->name('profile.edit');
   // Route::patch('/profile1', [ProfileController::class, 'update'])->name('profile.update');
   // Route::delete('/profile1', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});

Route::get('user-update', [ProfileController::class, 'userUpdate'])->name('users.update');


require __DIR__.'/auth.php';
