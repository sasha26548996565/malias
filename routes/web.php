<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::namespace('Main')->middleware('location')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::post('/subscription', 'SubscriptionController@subscribe')->name('subscribe');
    Route::get('/locale', 'LocationController@swapLanguage')->name('swapLanguage');
    Route::get('/search', 'SearchController@searchProduct')->name('search');
    Route::get('/product/show/{slug}', 'ProductController@show')->name('product.show');
    Route::post('/review/{product}', 'ReviewController@addReview')->name('review');
    Route::get('/category/{slug}', 'CategoryController@show')->name('category.show');
    Route::get('/currency/{code}', 'CurrencyController@swapCurrency')->name('swapCurrency');

    Route::middleware('auth')->controller('WishlistController')->name('wishlist.')->prefix('wishlist')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/toggle-product/{product}', 'toggleProduct')->name('toggleProduct');
    });

    Route::name('cart.')->prefix('cart')->group(function () {
        Route::post('/add/{product}/{quantity?}', 'CartController@add')->name('add');

        Route::middleware('cart_not_empty')->group(function () {
            Route::get('/', 'CartController@index')->name('index');
            Route::post('/action/{product}', 'CartController@action')->name('action');
            Route::post('/set-coupon', 'CouponController@setCoupon')->name('setCoupon');
        });
    });

    Route::middleware(['auth', 'cart_not_empty'])->name('checkout.')->prefix('checkout')->controller('CheckoutController')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/confirm', 'confirm')->name('confirm');
    });
});

Auth::routes();
