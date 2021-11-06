<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/admin', function ()
{
    return view('layouts.admin.app');
});


Route::view('dashboard', 'admin.dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
