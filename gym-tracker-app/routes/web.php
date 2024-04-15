<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PricingController;

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

Route::get('/', [homeController::class , 'index'])->name('home');

Route::get('/pricing', [PricingController::class,'index'])->name('show.pricing');

Route::get('/serviceDetails', function () {
    return view('homePages.serviceDetails');
});
Route::get('/classes', [ClasseController::class ,'index'])->name('show.classes');
Route::get('/coaches', [UserController::class, 'showCoaches'])->name('show.coaches');
Route::get('/bim', function () {
    return view('homePages.BIM');
});
Route::get('/login', function () {
    return view('homePages.auth.login');
});

Route::get('/register',[RegisterController::class , 'index'])->name('show.register');
Route::post('/register', [RegisterController::class, 'store'])->name('store.register');

Route::get('/login', [LoginController::class, 'index'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('check.login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/forgetPassword', function () {
    return view('homePages.auth.forgetPassword');
});
Route::get('/resetPassword', function () {
    return view('homePages.auth.resetPassword');
});

