<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::namespace('Main')->group(function () {
    Route::get('/', 'IndexController')->name('index');
});

Auth::routes();
