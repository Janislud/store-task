<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\DealsPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProductSearchController;
use App\Http\Controllers\ProfilePageController;
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


// Checkout stagin routes
// Route::get('/details', function () {
//     return view('CheckoutStages.stageDetails', [
//         "stageIndex" => 1,
//         "totalOrderPrice" => "$9.99",
//         "shipping" => "Calculated at the next step"
//     ]);
// });

// Route::get('/shipping', function () {
//     return view('CheckoutStages.stageShipping', [
//         "stageIndex" => 2,
//         "totalOrderPrice" => "9.99",
//         "userEmail" => "test@email.com",
//         "shippingAddress" => "Via Firenze 23, blablablabla",
//         "shipping" => "Standart Shipping"
//     ]);
// });

// Route::get('/payment', function () {
//     return view('CheckoutStages.stagePayment', [
//         "stageIndex" => 3,
//         "totalOrderPrice" => "9.99",
//         "shipping" => "Free shipping"
//     ]);
// });

// Route::get('/success', function () {
//     return view('CheckoutStages.stageSuccess', [
//         "stageIndex" => 4,
//         "totalOrderPrice" => "9.99",
//         "shipping" => "Free shipping"
//     ]);
// });

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/products', [ProductPageController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'showProduct']);
Route::get('/about', [AboutPageController::class, 'index']);
// Route::get('/deals', [DealsPageController::class, 'index']);
Route::get('/profile', [ProfilePageController::class, 'index']);

Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/checkout/details', [CheckoutController::class, 'showDetailsForm'])->name('checkoutStages.stageDetails');
Route::post('/checkout/details', [CheckoutController::class, 'storeDetails'])->name('checkout.storeDetails');

Route::get('/checkout/shipping', [CheckoutController::class, 'showShippingForm'])->name('checkoutStages.stageShipping');
Route::post('/checkout/shipping', [CheckoutController::class, 'storeShipping'])->name('checkout.storeShipping');

Route::get('/checkout/payment', [CheckoutController::class, 'showPaymentForm'])->name('checkoutStages.stagePayment');
Route::post('/checkout/payment', [CheckoutController::class, 'storePayment'])->name('checkout.storePayment');

Route::get('/checkout/success', [CheckoutController::class, 'showSuccess'])->name('checkoutStages.stageSuccess');


Route::get('/products', [ProductSearchController::class, 'index'])->name('products.index');

