<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('index');

Route::get('/search', SearchController::class)->name('search');
Route::get('tags/{tag:name}', TagController::class)->name('tags.search');

Route::middleware('guest')->group(function () {
    Route::get('/register', [App\Http\Controllers\RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [App\Http\Controllers\RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('/login', [App\Http\Controllers\SessionController::class, 'create'])->name('login');
    Route::post('/login', [App\Http\Controllers\SessionController::class, 'store'])->name('login.store');
});

Route::post('/logout', [App\Http\Controllers\SessionController::class, 'destroy'])->middleware('auth')->name('logout');
