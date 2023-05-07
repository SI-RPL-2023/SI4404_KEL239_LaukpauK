<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Request;
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

// set active side barr
function set_active($route) {
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }

    return Request::path() == $route ? 'active' : '';
}

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
Route::post('/sendEmail', [UserController::class, 'sendEmail'])->name('send.email');

// LIST PRODUCT
Route::get('/listProduct', [UserController::class, 'listProductView'])->name('listProductView');

// LANDING PAGE
Route::get('/', [UserController::class, 'landingPageView'])->name('landingPage');

// PROFILE
Route::get('/profile/{id}', [UserController::class, 'profileView'])->name('profile')->middleware('auth');
Route::get('/editProfile/{id}', [UserController::class, 'editProfileView'])->name('editProfileView')->middleware('auth');
Route::post('/editProfile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');


// ----------------------------------------------ADMIN----------------------------------------------
Route::prefix('/admin')->group(function () {
    // LIST PRODUCTS
    Route::get('/listProduct', [AdminController::class, 'showProducts'])->middleware(['auth', 'role-auth'])->name('listProduct');

    // ADD PRODUCT
    Route::get('/addProduct', [AdminController::class, 'addProductView'])->middleware(['auth', 'role-auth'])->name('addProduct');
    Route::post('/saveProduct', [ProductController::class, 'saveProduct'])->middleware(['auth', 'role-auth'])->name('saveProduct');

    // UPDATE PRODUCT
    Route::get('/editProduct/{id}', [AdminController::class, 'editProductView'])->middleware(['auth', 'role-auth'])->name('editProduct');
    Route::post('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->middleware(['auth', 'role-auth'])->name('updateProduct');

    // DELETE PRODUCT
    Route::delete('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->middleware(['auth', 'role-auth'])->name('deleteProduct');

    // DASHBOARD
    Route::get('/', [AdminController::class, 'dashboardView'])->name('dashboard')->middleware(['auth', 'role-auth']);
});