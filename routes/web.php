<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [\App\Http\Controllers\WelcomeController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\WelcomeController::class, 'contact'])->name('contact');
Route::get('/service', [\App\Http\Controllers\WelcomeController::class, 'service'])->name('service');
Route::get('/shop', [\App\Http\Controllers\WelcomeController::class, 'shop'])->name('shop');
Route::group(['prefix'=>'admin'], function (){
    Route::get('/', \App\Http\Controllers\Admin\IndexController::class);
    Route::group(['prefix'=>'group'], function (){
        Route::get('/', App\Http\Controllers\Admin\Group\IndexController::class)->name('admin.group.index');
        Route::post('/', App\Http\Controllers\Admin\Group\StoreController::class)->name('admin.group.store');
         Route::get('/create', App\Http\Controllers\Admin\Group\CreateController::class)->name('admin.group.create');
         Route::get("/{group}", \App\Http\Controllers\Admin\Group\ViewController::class)->name('admin.group.view');
         Route::get("/{group}/edit", \App\Http\Controllers\Admin\Group\EditController::class)->name('admin.group.edit');
         Route::patch("/{group}", \App\Http\Controllers\Admin\Group\UpdateController::class)->name('admin.group.update');
         Route::delete("/{group}", \App\Http\Controllers\Admin\Group\DeleteController::class)->name('admin.group.delete');
     });
     Route::group(['prefix'=>'product'], function (){
        Route::get('/', App\Http\Controllers\Admin\Product\IndexController::class)->name('admin.product.index');
        Route::post('/', App\Http\Controllers\Admin\Product\StoreController::class)->name('admin.product.store');
        Route::get('/create', App\Http\Controllers\Admin\Product\CreateController::class)->name('admin.product.create');
        Route::get("/{product}", \App\Http\Controllers\Admin\Product\ViewController::class)->name('admin.product.view');
        Route::get("/{product}/edit", \App\Http\Controllers\Admin\Product\EditController::class)->name('admin.product.edit');
        Route::patch("/{product}", \App\Http\Controllers\Admin\Product\UpdateController::class)->name('admin.product.update');
        Route::delete("/{product}", \App\Http\Controllers\Admin\Product\DeleteController::class)->name('admin.product.delete');
    });

    Route::group(['prefix'=>'user'], function (){
        Route::get('/', App\Http\Controllers\Admin\User\IndexController::class)->name('admin.user.index');
        Route::post('/', App\Http\Controllers\Admin\User\StoreController::class)->name('admin.user.store');
        Route::get('/create', App\Http\Controllers\Admin\User\CreateController::class)->name('admin.user.create');
        Route::get("/{user}", \App\Http\Controllers\Admin\User\ViewController::class)->name('admin.user.view');
        Route::get("/{user}/edit", \App\Http\Controllers\Admin\User\EditController::class)->name('admin.user.edit');
        Route::patch("/{user}", \App\Http\Controllers\Admin\User\UpdateController::class)->name('admin.user.update');
        Route::delete("/{user}", \App\Http\Controllers\Admin\User\DeleteController::class)->name('admin.user.delete');
    });
});
Route::group(['prefix'=>'user'], function (){
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
});

Route::group(['prefix'=>'landing'], function (){
    Route::get('/', \App\Http\Controllers\Landing\IndexController::class)->name('landing.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
