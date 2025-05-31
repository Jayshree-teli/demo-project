<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\Auth\Registercontroller;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\AdminController;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BecomeSellerController;

use Illuminate\Support\Facades\Auth;





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

Route::get('/', [Homecontroller::class,'index']);

Route::get('/category/{slug}/{id}', [Categorycontroller::class,'detail']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth'); // protect with login

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



Route::get('/become-a-seller', [BecomeSellercontroller::class, 'showForm'])->name('seller.form');
Route::post('/seller-register', [BecomeSellercontroller::class, 'store'])->name('seller.register');
Route::get('/get-cities/{state_id}', [BecomeSellercontroller::class, 'getCities']);

// Admin login page
Route::get('admin/login', [AdminController::class, 'showLogin'])->name('admin.login');

// Handle login form submit
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin dashboard (protected)
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'admin'])->name('admin.dashboard');


