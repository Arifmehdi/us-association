<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::get('/reset',[HomeController::class,'reset'])->name('reset');
