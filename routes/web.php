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

// ----------------------------------------------USER----------------------------------------------
// LOGIN
Route::get('/login', [UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginUser']);

// REGISTER
Route::get('/register', [UserController::class, 'registerView'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'registerUser']);

// LOGOUT
Route::post('/logout', [UserController::class, 'logoutUser'])->name('logout');

// CONTACT US
Route::get('/contactUs', [UserController::class, 'contactUsView'])->name('contactUs');

// LANDING PAGE
Route::get('/', [UserController::class, 'landingPageView']);

// ----------------------------------------------ADMIN----------------------------------------------
Route::prefix('/admin')->group(function () {
    // LIST PRODUCTS
    Route::get('/listProduct', [AdminController::class, 'showProducts'])->middleware('auth')->name('listProduct');

    // ADD PRODUCT
    Route::get('/addProduct', [AdminController::class, 'addProductView'])->middleware('auth')->name('addProduct');
    Route::post('/saveProduct', [ProductController::class, 'saveProduct'])->middleware('auth')->name('saveProduct');

    // UPDATE PRODUCT
    Route::get('/editProduct/{id}', [AdminController::class, 'editProductView'])->middleware('auth')->name('editProduct');
    Route::post('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->middleware('auth')->name('updateProduct');

    // DELETE PRODUCT
    Route::delete('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->middleware('auth')->name('deleteProduct');

    // DASHBOARD
    Route::get('/', [AdminController::class, 'dashboardView'])->name('dashboard')->middleware('auth');
});
