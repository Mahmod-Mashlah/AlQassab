<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/new', function () {

    return view('layouts.new');
});

Route::get('user-data-table', [UserController::class, 'index'])->name('user-index');
