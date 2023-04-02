<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
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


Route::get('/login', [UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginUser']);

Route::get('/register', [UserController::class, 'registerView'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'registerUser']);

Route::post('/logout', [UserController::class, 'logoutUser'])->name('logout');

Route::get('/', [UserController::class, 'landingPageView']);

Route::prefix('/admin')->group(function () {
    Route::get('/listProduct', [AdminController::class, 'showProducts'])->middleware('auth')->name('listProduct');
    Route::get('/addProduct', [AdminController::class, 'addProductView'])->middleware('auth')->name('addProduct');
    Route::post('/saveProduct', [ProductController::class, 'saveProduct'])->middleware('auth')->name('saveProduct');
    Route::get('/editProduct/{id}', [AdminController::class, 'editProductView'])->middleware('auth')->name('editProduct');
    Route::post('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->middleware('auth')->name('updateProduct');
    Route::delete('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->middleware('auth')->name('deleteProduct');
    Route::get('/', [AdminController::class, 'dashboardView'])->name('dashboard')->middleware('auth');
});