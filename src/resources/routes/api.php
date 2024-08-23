<?php

use Illuminate\Support\Facades\Route;

Route::prefix('category')->as('category.')->group(function() {
    Route::get('/{category?}', 'CategoryController@index')->name('index');
});
