<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResepController;
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

// PRODUCT
Route::get('/listProduct', [ProductController::class, 'listProductView'])->name('listProductView');
Route::get('/detailProduct/{id}', [ProductController::class, 'detailProductView'])->name('detailProduct')->middleware('auth');

// LANDING PAGE
Route::get('/', [UserController::class, 'landingPageView'])->name('landingPage');

// PROFILE
Route::get('/profile/{id}', [UserController::class, 'profileView'])->name('profile')->middleware('auth');
Route::get('/editProfile/{id}', [UserController::class, 'editProfileView'])->name('editProfileView')->middleware('auth');
Route::post('/editProfile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');

// RESEP 
Route::get('/resep', [ResepController::class, 'showResep'])->name('resep')->middleware('auth');
Route::get('/resep/{slug}', [ResepController::class, 'detailResepUser'])->name('detailResepUser')->middleware('auth');

// ARTIKEL
Route::get('/artikel', [ArticleController::class, 'artikelView'])->name('artikel')->middleware('auth');
Route::get('/artikel/{slug}', [ArticleController::class, 'detailArtikelUser'])->name('detailArtikelUser')->middleware('auth');

// CART
Route::get('/cart', [CartController::class, 'cartView'])->name('cart')->middleware('auth');
Route::post('/addCart', [CartController::class, 'addCart'])->name('addCart')->middleware('auth');
Route::get('/deleteCart/{id}', [CartController::class, 'deleteCart'])->middleware('auth')->name('deleteCart');

// ORDER
Route::get('/orders', [OrderController::class, 'statusOrderView'])->name('orders')->middleware('auth');
Route::get('/orderDetail/{id}', [OrderController::class, 'ordersView'])->name('orderDetail')->middleware('auth');


// ----------------------------------------------ADMIN----------------------------------------------
Route::prefix('/admin')->group(function () {
    // ============================================ PRODUCTS ============================================
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

    // ============================================ RESEP ============================================
    // LIST RESEP
    Route::get('/listResep', [ResepController::class, 'showResepAdmin'])->middleware(['auth', 'role-auth'])->name('listResepAdmin');
    // DETAIL RESEP
    Route::get('/detailResep/{slug}', [ResepController::class, 'detailResepAdmin'])->middleware(['auth', 'role-auth'])->name('detailResepAdmin');
    // ADD RESEP
    Route::get('/addResep', [ResepController::class, 'addResepView'])->middleware(['auth', 'role-auth'])->name('addResepAdmin');
    Route::get('/addResep/checkSlug', [ResepController::class, 'checkSlug'])->middleware(['auth', 'role-auth'])->name('checkSlug');
    Route::post('/addResep', [ResepController::class, 'addResep'])->middleware(['auth', 'role-auth'])->name('addResep');
    // EDIT RESEP
    Route::get('/editResep/{slug}', [ResepController::class, 'editResepView'])->middleware(['auth', 'role-auth'])->name('editResep');
    Route::post('/updateResep/{id}', [ResepController::class, 'updateResep'])->middleware(['auth', 'role-auth'])->name('updateResep');
    // DELETE RESEP
    Route::delete('/deleteResep/{id}', [ResepController::class, 'deleteResep'])->middleware(['auth', 'role-auth'])->name('deleteResep');
    
    // ============================================ ARTIKEL ============================================
    // LIST ARTIKEL
    Route::get('/listArtikel', [ArticleController::class, 'showArtikelAdmin'])->middleware(['auth', 'role-auth'])->name('listArtikelAdmin');
    // DETAIL ARTIKEL
    Route::get('/detailArtikel/{slug}', [ArticleController::class, 'detailArtikel'])->middleware(['auth', 'role-auth'])->name('detailArtikelAdmin');
    // ADD ARTIKEL
    Route::get('/addArtikel', [ArticleController::class, 'addArtikelView'])->middleware(['auth', 'role-auth'])->name('addArtikelAdmin');
    Route::get('/addArtikel/checkSlug', [ArticleController::class, 'checkSlug'])->middleware(['auth', 'role-auth'])->name('checkSlug');
    Route::post('/addArtikel', [ArticleController::class, 'addArtikel'])->middleware(['auth', 'role-auth'])->name('addArtikel');
    // EDIT ARTIKEL
    Route::get('/editArticle/{slug}', [ArticleController::class, 'editArticleView'])->middleware(['auth', 'role-auth'])->name('editArticle');
    Route::post('/updateArticle/{id}', [ArticleController::class, 'updateArticle'])->middleware(['auth', 'role-auth'])->name('updateArticle');
    // DELETE ARTIKEL
    Route::delete('/deleteArticle/{id}', [ArticleController::class, 'deleteArticle'])->middleware(['auth', 'role-auth'])->name('deleteArticle');
    
    // DASHBOARD
    Route::get('/', [AdminController::class, 'dashboardView'])->name('dashboard')->middleware(['auth', 'role-auth']);
});