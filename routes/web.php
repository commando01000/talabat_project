<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.home.index');
});

Route::get('become-a-partner', function () {
    return view('Frontend.become-a-partner.index');
})->name('become-a-partner');