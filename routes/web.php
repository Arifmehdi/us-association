<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\CaptchaController;

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
Route::get('/events',[HomeController::class,'event'])->name('event');
Route::get('/gulf-coast-expo-2025',[HomeController::class,'event_details'])->name('event.details');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/details',[HomeController::class,'blog_details'])->name('blog.details');
// Route::get('/sponsorship',[HomeController::class,'sponsorship'])->name('sponsorship');
Route::get('/membership',[HomeController::class,'membership'])->name('membership');
Route::post('/membership',[HomeController::class,'membership_store'])->name('membership.form');
Route::get('/vendor',[HomeController::class,'vendor'])->name('vendor');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[HomeController::class,'contact_store'])->name('contact.store');

Route::get('/refresh-captcha', [CaptchaController::class, 'refreshCaptcha']);




Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::resource('sponsors', SponsorController::class);
    Route::resource('socials', SocialController::class);
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
