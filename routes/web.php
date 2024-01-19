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

Route::get('/order_history', [OrderController::class, 'index'])->name('order_history');
Route::get('/cats', [CatsController::class, 'cats_index']);
Route::get('/menu', [OrderController::class, 'menu']);
Route::get('/about_us', [AboutController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
