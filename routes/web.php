<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('landing');
});

Route::get('dashboard', [IndexController::class, 'dashboard'])->name('dashboard')->middleware('auth');
