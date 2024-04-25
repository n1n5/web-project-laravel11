<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/administration', 'administration')->name('administration');

Route::view('/founder', 'founder')->name('founder');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/scps/{scp}', [HomeController::class, 'show'])->name('scps.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('stories', StoryController::class)->except(['index', 'create']);

Route::post('/stories/{story}/comments', [CommentController::class, 'store'])->name('stories.comments.store');

Route::resource('users', UserController::class)->only('show', 'edit', 'update');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');



Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
