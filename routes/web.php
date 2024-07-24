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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/signin', function () {
//     return view('login');
// })->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/seafarers-medical', function () {
    return view('seafarers-medical');
})->name('seafarers-medical');

Route::get('/ambulance-driver-medical', function () {
    return view('ambulance-driver-medical');
})->name('ambulance-driver-medical');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
