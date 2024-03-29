<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\DashboardController;



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
    return view('home0');
});

Route::get('/login', [PageController::class, 'loginPage']);
Route::get('/register', [PageController::class, 'registerPage']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/cats', [CatsController::class, 'cats_index']);
Route::get('/menu', [OrderController::class, 'menu']);
Route::get('/about_us', [AboutController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard-customer', [DashboardController::class, 'customer']);
Route::get('/dashboard-order', [DashboardController::class, 'orders'])->name('dashboard.orders');

Route::get('/order-history', [OrderController::class, 'orderHistory'])->name('order.history');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

Route::get('/search', [DashboardController::class, 'search'])->name('search');
