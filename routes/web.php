<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/team', 'team')->name('team');
    Route::get('/schedule', 'schedule')->name('schedule');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('admin/about', AboutController::class)->only(['index', 'edit', 'update']);
Route::resource('admin/team', TeamController::class)->except(['show']);
Route::resource('admin/blog', BlogController::class)->except(['show']);
Route::resource('admin/schedule', ScheduleController::class)->except(['show']);
Route::resource('admin/gallery', GalleryController::class)->except(['show']);
