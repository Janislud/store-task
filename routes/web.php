<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSearchController;
use Illuminate\Support\Facades\Route;

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
//     return view('home');
// });

Route::get('/products', function () {
    return view('products');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/productId', function () {
    return view('pdp');
});

Route::get('/cart', function () {
    return view('cart');
});

// Checkout stagin routes
Route::get('/details', function () {
    return view('CheckoutStages.stageDetails', [
        "stageIndex" => 1,
        "totalOrderPrice" => "$9.99",
        "shipping" => "Calculated at the next step"
    ]);
});

Route::get('/shipping', function () {
    return view('CheckoutStages.stageShipping', [
        "stageIndex" => 2,
        "totalOrderPrice" => "9.99",
        "userEmail" => "test@email.com",
        "shippingAddress" => "Via Firenze 23, blablablabla",
        "shipping" => "Standart Shipping"
    ]);
});

Route::get('/payment', function () {
    return view('CheckoutStages.stagePayment', [
        "stageIndex" => 3,
        "totalOrderPrice" => "9.99",
        "shipping" => "Free shipping"
    ]);
});

Route::get('/success', function () {
    return view('CheckoutStages.stageSuccess', [
        "stageIndex" => 4,
        "totalOrderPrice" => "9.99",
        "shipping" => "Free shipping"
    ]);
});
// ----------------------------------

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products', [ProductSearchController::class, 'index'])->name('products.index');
