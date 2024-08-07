<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\DealsPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\FaqPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProductSearchController;
use App\Http\Controllers\ProfilePageController;
use App\Http\Controllers\CouponController;
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

Route::get('/', [HomeProductController::class, 'index']);
Route::get('/featured', [HomeProductController::class, 'featuredProducts']);

Route::get('/products', [ProductPageController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'showProduct']);
Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/deals', [DealsPageController::class, 'index']);
Route::get('/profile', [ProfilePageController::class, 'index']);
Route::get('/faq', [FaqPageController::class,'index']);

Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');


Route::get('/checkout/details', [CheckoutController::class, 'showDetailsForm'])->name('checkoutStages.stageDetails');
Route::post('/checkout/details', [CheckoutController::class, 'storeDetails'])->name('checkout.storeDetails');

Route::get('/checkout/shipping', [CheckoutController::class, 'showShippingForm'])->name('checkoutStages.stageShipping');
Route::post('/checkout/shipping', [CheckoutController::class, 'storeShipping'])->name('checkout.storeShipping');

Route::get('/checkout/payment', [CheckoutController::class, 'showPaymentForm'])->name('checkoutStages.stagePayment');
Route::post('/checkout/payment', [CheckoutController::class, 'storePayment'])->name('checkout.storePayment');

Route::get('/checkout/success', [CheckoutController::class, 'showSuccess'])->name('checkoutStages.stageSuccess');
Route::get('/checkout/success/{order_id}', [CheckoutController::class, 'showSuccess'])->name('checkoutStages.stageSuccess');

Route::get('/products', [ProductSearchController::class, 'index'])->name('products.index');

Route::get('/coupons', [CouponController::class, 'coupon']);

