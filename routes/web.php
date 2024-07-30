<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/signup', function () {
//     return view('signup');
// })->name('signup');

Route::get('/seafarers-medical', function () {
    return view('seafarers-medical');
})->name('seafarers-medical');

Route::get('/ambulance-driver-medical', function () {
    return view('ambulance-driver-medical');
})->name('ambulance-driver-medical');

Route::get('/taxi-driver-medical', function () {
    return view('taxi-driver-medical');
})->name('taxi-driver-medical');

Auth::routes(['register' => false]);

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/hgv-driver-medical', function () {
    return view('hgv-driver-medical');
})->name('hgv-driver-medical');


Route::get('/crane-operators-medical', function () {
    return view('crane-operators-medical');
})->name('crane-operators-medical');

Route::get('/forklift-operator-medical', function () {
    return view('forklift-operator-medical');
})->name('forklift-operator-medical');

Route::get('/bus-driver-medical', function () {
    return view('bus-driver-medical');
})->name('bus-driver-medical');

Route::get('/train-driver-medical', function () {
    return view('train-driver-medical');
})->name('train-driver-medical');

Route::get('/motorhome-drivers-medical', function () {
    return view('motorhome-drivers-medical');
})->name('motorhome-drivers-medical');

Route::get('/sports-medicals', function () {
    return view('sports-medicals');
})->name('sports-medicals');

Route::get('/sickness-referrals', function () {
    return view('sickness-referrals');
})->name('sickness-referrals');

Route::get('/health-surveillance', function () {
    return view('health-surveillance');
})->name('health-surveillance');

Route::get('/pre-employment-medicals', function () {
    return view('pre-employment-medicals');
})->name('pre-employment-medicals');

Route::get('/safety-critical-medicals', function () {
    return view('safety-critical-medicals');
})->name('safety-critical-medicals');

Route::get('/book-medical', function () {
    return view('book-medical');
})->name('book-medical');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/customer-support', function () {
    return view('customer-support');
})->name('customer-support');

Route::get('/gdpr-policy', function () {
    return view('gdpr-policy');
})->name('gdpr-policy');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');