<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login',[AuthController::class,'logView'])->name('login');
    Route::post('/login',[AuthController::class,'login'])->name('login')->middleware('throttle:4,1');
    Route::get('/register',[AuthController::class,'regView'])->name('register');
    Route::post('/register',[AuthController::class,'register'])->name('register')->middleware('throttle:4,1');
    Route::get('/reset',[AuthController::class,'reset'])->name('reset');
});




Route::group(['middleware' => 'auth'], function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
