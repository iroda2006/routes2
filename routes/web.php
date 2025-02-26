<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
//1chi topshiriq
Route::get('/city/{name}', function ($name) {
    return "Welcome to {$name}!";
})->name('city.show');


//2chi topshiriq
Route::prefix('admin')->group(function () {
    Route::get('/users/{id}', function ($id) {
        return "User ID: {$id}";
    })->name('admin.users.show');
});


//3chi topshiriq
Route::prefix('profile')->group(function () {
    Route::get('/view', function () {
        return "Profile View Page";
    })->name('profile.view');

    Route::get('/edit', function () {
        return "Profile Edit Page";
    })->name('profile.edit');

    Route::get('/settings', function () {
        return "Profile Settings Page";
    })->name('profile.settings');
});

//4chi topshiriq
Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return "Products List";
    })->name('products.index');

    Route::get('/{id}', function ($id) {
        return "Product ID: {$id}";
    })->name('products.show');

    Route::get('/{id}/edit', function ($id) {
        return "Edit Product ID: {$id}";
    })->name('products.edit');
});

//5chi topshiriq
Route::get('/old-url', function () {
    return redirect('/new-url');
});

