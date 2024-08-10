<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsListController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/productList', [ProductsListController::class, 'productList'])->name('productList');
Route::get('/products/{category_id}', [ProductsListController::class, 'productByCategory'])->name('productByCategory');
Route::get('/products/detail/{product}', [ProductsListController::class, 'productDetail'])->name('productDetail');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');


Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/add_cart', [CartController::class, 'addToCart'])->name('add_cart');
    Route::get('/del_cart/{id}', [CartController::class, 'delCart'])->name('del_cart');
    Route::post('/update_cart', [CartController::class, 'updateCart'])->name('update_cart');
    
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'post_checkout']);
    Route::get('/history', [CheckoutController::class, 'history'])-> name('history');
    Route::get('/order_detail/{order}', [CheckoutController::class, 'detail'])-> name('detail');
    Route::get('/update_status/{order}', [CheckoutController::class, 'huyDh'])-> name('huyDh');
    Route::get('/verify/{token}', [CheckoutController::class, 'verify'])->name('verify');

});






Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/check_login', [UserController::class, 'check_login'])->name('check_login');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/check_register', [UserController::class, 'check_register'])->name('check_register');

Route::get('/change_password', [UserController::class, 'change_password'])->name('change_password');
Route::post('/check_change_password', [UserController::class, 'check_change_password'])->name('check_change_password');

Route::get('/forgot_password', [UserController::class, 'forgot_password'])->name('forgot_password');
Route::post('/check_forgot_password', [UserController::class, 'check_forgot_password'])->name('check_forgot_password');

Route::get('/reset_password/{token}', [UserController::class, 'reset_password'])->name('reset_password');
Route::post('/reset_password/{token}', [UserController::class, 'check_reset_password']);

Route::get('/logout', [UserController::class, 'logout_user'])->name('logout');




Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/comment/{product_id}', [ProductsListController::class, 'post_comment'])->name('comment');
    // Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    // Products
    Route::get('/product', [AdminProductController::class, 'product'])->name('product');
    Route::get('/product/create', [AdminProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/product/store', [AdminProductController::class, 'storeProduct'])->name('storeProduct');
    Route::get('/product/{product}/edit', [AdminProductController::class, 'editProduct'])->name('editProduct');
    Route::put('/product/update/{product}', [AdminProductController::class, 'updateProduct'])->name('updateProduct');
    Route::delete('/product/destroy/{product}', [AdminProductController::class, 'destroyProduct'])->name('destroyProduct');
    // Category
    Route::get('/category', [AdminCategoryController::class, 'category'])->name('category');
    Route::get('/category/create', [AdminCategoryController::class, 'addCategory'])->name('addCategory');
    Route::post('/category/store', [AdminCategoryController::class, 'storeCategory'])->name('storeCategory');
    Route::get('/category/{category}/edit', [AdminCategoryController::class, 'editCategory'])->name('editCategory');
    Route::put('/category/update/{category}', [AdminCategoryController::class, 'updateCategory'])->name('updateCategory');
    Route::delete('/category/destroy/{category}', [AdminCategoryController::class, 'destroyCategory'])->name('destroyCategory');

    // order
    Route::get('/order', [AdminOrderController::class, 'order'])->name('order'); 
    Route::get('/order/detail/{order}', [AdminOrderController::class, 'order_show'])->name('order_details');
    Route::post('/detal/update', [AdminOrderController::class, 'updateStatus']);


    // User
    Route::get('/users', [AdminUserController::class, 'users'])->name('users');
});
