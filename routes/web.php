<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);

// Route::get('/posts/{post}', [PostController::class, 'show']);
// Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

// Route::patch('/posts/{post}', [PostController::class, 'patch']);
// Route::delete('/posts/{post}', [PostController::class, 'delete']);

Route::get('/users', [UserController::class, 'index'])->name('dashboard.index');
Route::get('/users/create', [UserController::class, 'create'])->name('dashboard.create');
Route::post('/users', [UserController::class, 'store'])->name('dashboard.store');

Route::get('/users/{user}', [UserController::class, 'show'])->name('dashboard.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('dashboard.edit');

Route::patch('/users/{user}', [UserController::class, 'patch'])->name('dashboard.patch');
Route::delete('/users/{user}', [UserController::class, 'delete'])->name('dashboard.delete');