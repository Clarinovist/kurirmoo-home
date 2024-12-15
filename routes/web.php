<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


// Landing Page
Route::get('/', [LandingpageController::class, 'index'])->name('home');
Route::get('/privacy-policy', [LandingpageController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/syarat-ketentuan', [LandingpageController::class, 'syaratketentuan'])->name('syaratketentuan');


// Landing Page




// login
Route::get('/login', [AuthenticatedSessionController::class, 'form_login'])->name('login');
Route::middleware('guest')->post('/login', [AuthenticatedSessionController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('logout');
// Admin
Route::get('/home-admin', [HomeController::class, 'index'])->name('home-admin');






