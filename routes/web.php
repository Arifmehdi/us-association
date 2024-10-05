<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/expo',[HomeController::class,'expo'])->name('expo');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/sponsorship',[HomeController::class,'sponsorship'])->name('sponsorship');
Route::get('/membership',[HomeController::class,'membership'])->name('membership');
Route::get('/vendor',[HomeController::class,'vendor'])->name('vendor');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');


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


Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::resource('sponsors', SponsorController::class);
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
