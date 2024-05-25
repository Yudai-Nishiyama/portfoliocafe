<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('single-charge', [App\Http\Controllers\HomeController::class, 'singleCharge'])->name('single.charge');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
