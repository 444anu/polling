<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\verifyController;
use App\Http\Middleware\IsEmailVerified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pollController;
use App\Http\Controllers\optionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/register',[RegisterController::class, 'registerForm'])->name('register.form');
Route::post('/register',[RegisterController::class, 'registerUser'])->name('user.store');

Route::get('/login',[RegisterController::class, 'loginForm'])->name('login.form');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginUser'])->name('auth.user');

Route::get('/polls', [pollController::class, 'index'])->name('polls');
Route::post('/polls', [pollController::class, 'store'])->name('poll.store');

Route::resource('Login', LoginController::class);
Route::resource('verifications', verifyController::class);
//Route::get('/token'),
//Route::get('auth/verify-email/{token}', [RegisterController::class, 'store']);

//Route::middleware([IsEmailVerified::class])->group(function () {
//    Route::get('/page', function () {
//        return view('poll');
//    });
//  });
Route::resource('poll', pollController::class);

Route::resource('option',optionController::class);

//Route::post('option/store', [optionController::class,'store'])->name('option.store');
//Route::post(IsEmailVerified::class,'store');

Route::get('/option',[optionController::class,'show'])->name('option.create');
Route::get('/option/{questionId}',[optionController::class,'index'])->name('option.index');
Route::get('/test', function () {
    return view('test');
});

