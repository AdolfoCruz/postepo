<?php

use App\Http\Controllers\Admin\AdminController;

// Login route
Route::get('/', function () {
    return redirect()->route('login');
});
// Dashboard route
Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
