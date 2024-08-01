<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalController;

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

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['register' => false]);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route::get('/signup', function () {
//     return view('signup');
// })->name('signup');
Route::get('/seafarers-medical', [MedicalController::class, 'seafarersMedical'])->name('seafarers-medical');
Route::get('/ambulance-driver-medical', [MedicalController::class, 'ambulanceDriverMedical'])->name('ambulance-driver-medical');
Route::get('/taxi-driver-medical', [MedicalController::class, 'taxiDriverMedical'])->name('taxi-driver-medical');
Route::get('/hgv-driver-medical', [MedicalController::class, 'hgvDriverMedical'])->name('hgv-driver-medical');
Route::get('/crane-operators-medical', [MedicalController::class, 'craneOperatorsMedical'])->name('crane-operators-medical');
Route::get('/forklift-operator-medical', [MedicalController::class, 'forkliftOperatorMedical'])->name('forklift-operator-medical');
Route::get('/bus-driver-medical', [MedicalController::class, 'busDriverMedical'])->name('bus-driver-medical');
Route::get('/train-driver-medical', [MedicalController::class, 'trainDriverMedical'])->name('train-driver-medical');
Route::get('/motorhome-drivers-medical', [MedicalController::class, 'motorhomeDriversMedical'])->name('motorhome-drivers-medical');
Route::get('/sports-medicals', [MedicalController::class, 'sportsMedicals'])->name('sports-medicals');
Route::get('/sickness-referrals', [MedicalController::class, 'sicknessReferrals'])->name('sickness-referrals');
Route::get('/health-surveillance', [MedicalController::class, 'healthSurveillance'])->name('health-surveillance');
Route::get('/pre-employment-medicals', [MedicalController::class, 'preEmploymentMedicals'])->name('pre-employment-medicals');
Route::get('/safety-critical-medicals', [MedicalController::class, 'safetyCriticalMedicals'])->name('safety-critical-medicals');






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

Route::get('/booking-form', function () {
    return view('booking-form');
})->name('booking-form');

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

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/blogs', function () {
    return view('admin.blogs');
})->name('admin.blogs');

Route::get('/admin/inquiries', function () {
    return view('admin.inquiries');
})->name('admin.inquiries');

Route::get('/admin/bookings', function () {
    return view('admin.bookings');
})->name('admin.bookings');

Route::get('/admin/bookings-details', function () {
    return view('admin.bookings-details');
})->name('admin.bookings-details');

Route::get('/admin/calendar', function () {
    return view('admin.calendar');
})->name('admin.calendar');

Route::get('/admin/add-blog', function () {
    return view('admin.add-blog');
})->name('admin.add-blog');

