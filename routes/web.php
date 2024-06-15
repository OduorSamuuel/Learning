<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
Route::get('/', function () {
    return view('home');
});



Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about',[AboutController::class,'index' ])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Route::get('/profile1', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile1', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile1', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile',[ProfileController::class,'show'])->name('profile.home');
});

require __DIR__.'/auth.php';
