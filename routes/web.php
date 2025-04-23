<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/localization/{locale}', LocalizationController::class)->name('localization');

// prefixed routes
Route::middleware(Localization::class)
    ->group(function () {
        Route::view('/', 'home');
        Route::view('/home', 'home')->name('home');
        Route::view('/about-us', 'about-us')->name('about-us');
        Route::view('/contact-us', 'contact-us');
        Route::view('terms-and-policy', 'terms-and-policy');
        Route::view('/news', 'news')->name('news');
        Route::view('/registration', 'registration')->name('registration');
        Route::view('/players', 'players')->name('players');
        Route::view('/best-football-club-ivory-coast', 'geniesfc')->name('geniesfc');

        Route::post('/register-player', [RegistrationController::class, 'register']);
        Route::post('/send-contact-us', [ContactUsController::class, 'sendMessage']);
    });
