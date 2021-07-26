<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SalesController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('adminIndex');

    Route::get('login', function () {
        return view('admin.login');
    })->name('adminLogin');

    Route::prefix('category')->group(function () {

        Route::any('/', [CategoryController::class, 'index'])->name('adminCategoryIndex');
        Route::any('index', [CategoryController::class, 'index'])->name('adminCategoryList');
        Route::any('edit', [CategoryController::class, 'edit'])->name('adminCategoryEdit');

    });

    Route::prefix('product')->group(function () {
        Route::any('/', [ProductController::class, 'index'])->name('adminProductIndex');
        Route::any('index', [ProductController::class, 'index'])->name('adminProductList');
        Route::any('edit', [ProductController::class, 'edit'])->name('adminProductEdit');
    });

    Route::prefix('sales')->group(function () {
        Route::any('/', [SalesController::class, 'index'])->name('adminSalesIndex');
        Route::any('index', [SalesController::class, 'index'])->name('adminSalesList');
        Route::any('view/{id?}', [SalesController::class, 'view'])->name('adminSalesView');
    });

    Route::prefix('user')->group(function () {
        Route::any('/', [UserController::class, 'index'])->name('adminUserIndex');
        Route::any('index', [UserController::class, 'index'])->name('adminUserList');
        Route::any('edit', [UserController::class, 'edit'])->name('adminUserEdit');
    });



});





