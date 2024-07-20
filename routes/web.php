<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('admin/login', [AdminController::class, 'index'])->name('login');
    Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.post');
});
Route::get('admin', [AdminController::class, 'show'])->name('admin.index')->middleware('auth');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('auth');
Route::get('/', function () {
    return view('Frontend.home.index');
});
Route::resource('restaurants', RestaurantController::class);

Route::resource('drivers', DriverController::class);

Route::get('become-a-partner', function () {
    return view('Frontend.become-a-partner.index');
})->name('become-a-partner');

Route::get('become-a-driver', function () {
    return view('Frontend.become-a-driver.index');
})->name('become-a-driver');

Route::get('about-us', function () {
    return view('Frontend.about-us.index');
})->name('about-us');
