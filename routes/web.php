<?php

use App\Livewire\Actions\Logout;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::get('/index',[IndexController::class,'index']);
Route::get('/book',[BookingController::class,'book']);
Route::get('/about',[BookingController::class,'about']);
Route::get('/book',[AboutController::class,'book']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/book',[IndexController::class,'book']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/booking',[AboutController::class,'booking'])->name('booking.show');
Route::get('/display',[BookingController::class,'show'])->name('booking.display');
Route::delete('/booking/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');
Route::post('/booking',[BookingController::class,'store'])->name('booking.submit');
Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [BookingController::class, 'update'])->name('update');
Route::get('/dashboard',[dashboardController::class,'create'])->name('booking.dashboard');
Route::get('/logout', Logout::class)->name('logout');
