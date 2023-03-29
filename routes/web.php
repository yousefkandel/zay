<?php

use App\Http\Controllers\FrontController;

Route::get('/Search', [FrontController::class, 'Search'])->name('Search');
// cart
// Route::get('/cart', [FrontController::class, 'cart_page'])->name('cart_page');
Route::get('/cart_page', [FrontController::class, 'cart_page'])->name('cart_page');
Route::post('/edit_cart/{id}', [FrontController::class, 'edit_cart'])->name('edit_cart');
Route::get('/delete_cart/{id}', [FrontController::class, 'delete_cart'])->name('delete_cart');
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/shop', [FrontController::class, 'shop'])->name('shop');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/uploadContact', [FrontController::class, 'uploadContact'])->name('uploadContact');
Route::get('/single/{id}', [FrontController::class, 'single_shop'])->name('single_shop');
Route::get('/single_Featured/{id}', [FrontController::class, 'single_Featured'])->name('single_Featured');
Route::get('/show/{id}', [FrontController::class, 'single_feat'])->name('single_feat');
// Route::post('/car', [FrontController::class, 'car'])->name('car');
Route::post('/cart/{id}', [FrontController::class, 'cart'])->name('cart');
// Route::redirect('/single_Featured/{id}', '/');
Route::redirect('/single_Featured', '/');

use App\Http\Controllers\BackController;

// Route::get('/', function () {
//     return view('front.cart.cart');
// });
Route::get('/logout', [BackController::class, 'logout'])->name('logout');

Route::get('/Redirect', [BackController::class, 'Redirect'])->name('Redirect');
route::group(['middleware' => ['role:superadministrator']], function(){

});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Home Page
    //slide
   Route::get('/dashboard', [BackController::class, 'dashboard'])->name('dashboard');

    Route::get('/slide', [BackController::class, 'slide'])->name('slide');
    Route::get('/add_slide', [BackController::class, 'add_slide'])->name('add_slide');
    Route::post('/upload_slide', [BackController::class, 'upload_slide'])->name('upload_slide');
    Route::get('/up_slide/{id}', [BackController::class, 'up_slide']) ->name('up_slide');
    Route::post('/edit_slide/{id}', [BackController::class, 'edit_slide'])->name('edit_slide');
    Route::get('/delete_slide/{id}', [BackController::class, 'delete_slide'])->name('delete_slide');

    // Categories
    Route::get('/Categories', [BackController::class, 'Categories'])->name('Categories');
    Route::get('/add_Categories', [BackController::class, 'add_Categories'])->name('add_Categories');
    Route::post('/upload_Categories', [BackController::class, 'upload_Categories'])->name('upload_Categories');
    Route::get('/up_Categories/{id}', [BackController::class, 'up_Categories']) ->name('up_Categories');
    Route::post('/edit_Categories/{id}', [BackController::class, 'edit_Categories'])->name('edit_Categories');
    Route::get('/delete_Categories/{id}', [BackController::class, 'delete_Categories'])->name('delete_Categories');
    // Featured
    Route::get('/Featured', [BackController::class, 'Featured'])->name('Featured');
    Route::get('/add_Featured', [BackController::class, 'add_Featured'])->name('add_Featured');
    Route::post('/upload_Featured', [BackController::class, 'upload_Featured'])->name('upload_Featured');
    Route::get('/up_Featured/{id}', [BackController::class, 'up_Featured']) ->name('up_Featured');
    Route::post('/edit_Featured/{id}', [BackController::class, 'edit_Featured'])->name('edit_Featured');
    Route::get('/delete_Featured/{id}', [BackController::class, 'delete_Featured'])->name('delete_Featured');
    // Shop Page
    Route::get('/Shop', [BackController::class, 'Shop'])->name('Shop');
    Route::get('/add_Shop', [BackController::class, 'add_Shop'])->name('add_Shop');
    Route::post('/upload_Shop', [BackController::class, 'upload_Shop'])->name('upload_Shop');
    Route::get('/up_Shop/{id}', [BackController::class, 'up_Shop']) ->name('up_Shop');
    Route::post('/edit_Shop/{id}', [BackController::class, 'edit_Shop'])->name('edit_Shop');
    Route::get('/delete_Shop/{id}', [BackController::class, 'delete_Shop'])->name('delete_Shop');
});
