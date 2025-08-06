<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CheckoutController;
use Illuminate\Support\Facades\Artisan;

// Route::get('/', function () {
//     return view('frontend.layout.master'); // ✅ load the child view, not the master
// });

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'km'])) {
        abort(400); // Invalid language
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return redirect()->back();
});

Route::get('/test', fn() => 'Laravel working!');

Route::get('/run-migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return '✅ Migration done';
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/service','index')->name('service');
    Route::get('/service/register-New-License','register')->name('register-new-license');
    Route::get('/service/renew','renew')->name('renew');
    Route::get('/service/booktest','booktest')->name('booktest');
    Route::get('/service/checkstatus','checkstatus')->name('checkstatus');
    Route::get('/service/checkstatus/download-duc','downloadDucument')->name('downloadDucument');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::get('/login/register','register')->name('register');
    Route::get('/profile','profile')->name('profile');
});


Route::controller(NewsController::class)->group(function(){
    Route::get('/news', 'index')->name('news');
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about', 'index')->name('about');
});


Route::controller(CheckoutController::class)->group(function(){
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/checkout/payment', 'payment')->name('payment');
});