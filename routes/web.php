<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::namespace('Main')->middleware('location')->group(function () {
    Route::get('/', 'IndexController')->name('index');
    Route::post('/subscription', 'SubscriptionController@subscribe')->name('subscribe');
    Route::get('/locale', 'LocationController@swapLanguage')->name('swapLanguage');
    Route::get('/search', 'SearchController@searchProduct')->name('search');
    Route::get('/product/{slug}', 'ProductController@show')->name('product.show');
    Route::post('/review/{product}', 'ReviewController@addReview')->name('review');
});

Auth::routes();
