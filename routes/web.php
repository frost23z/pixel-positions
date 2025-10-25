<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('index');

Route::get('/register', [App\Http\Controllers\RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisteredUserController::class, 'store'])->name('register.store');
