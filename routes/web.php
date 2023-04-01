<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'landingPageView']);

Route::get('/login', [UserController::class, 'loginView'])->name('login');
Route::post('/login', [UserController::class, 'loginUser']);

Route::get('/register', [UserController::class, 'registerView'])->name('register');
Route::post('/register', [UserController::class, 'registerUser']);

Route::post('/logout', [UserController::class, 'logoutUser']);

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboardView'])->name('dashboard');
    Route::get('/listProduct', [AdminController::class, 'showProducts'])->name('listProduct');
    Route::get('/addProduct', [AdminController::class, 'addProductView'])->name('addProduct');
    Route::post('/saveProduct', [ProductController::class, 'saveProduct'])->name('saveProduct');
    Route::delete('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
});