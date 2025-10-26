<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}/edit', [App\Http\Controllers\JobController::class, 'edit'])->name('jobs.edit');
    Route::patch('/jobs/{job}', [App\Http\Controllers\JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [App\Http\Controllers\JobController::class, 'destroy'])->name('jobs.destroy');

    Route::delete('/logout', [App\Http\Controllers\SessionController::class, 'destroy'])->name('logout');
});

Route::get('/jobs/{job}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');


Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class)->name('tags.search');

Route::middleware('guest')->group(function () {
    Route::get('/register', [App\Http\Controllers\RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [App\Http\Controllers\RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', [App\Http\Controllers\SessionController::class, 'create'])->name('login');
    Route::post('/login', [App\Http\Controllers\SessionController::class, 'store'])->name('login.store');
});
