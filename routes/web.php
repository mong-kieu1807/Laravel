<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\CarController;

Route::get('/', [HomeController::class, 'index'])->name("home.index");
// Route::get('/', function () {
//     return view('template.news');
// });
Route::get('/admin', [AdminHomeController::class, 'index'])->name("admin.home.index");
Route::get('/admin/products', [AdminProductController::class, 'index'])->name("admin.product.index");
Route::post('/admin/products/store',[AdminProductController::class, 'store'])->name("admin.product.store");
Route::delete('/admin/products/{id}/delelte',[AdminProductController::class, 'delete'])->name("admin.product.delete");

Route::get('/admin/products/{id}/edit',[AdminProductController::class, 'edit'])->name("admin.product.edit");
Route::put('/admin/products/{id}/update',[AdminProductController::class, 'update'])->name("admin.product.update");

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/about', [HomeController::class, 'about'])->name("home.about");
Route::get('/hello', function () {
    return "web -> hello";
});
Route::get('/hien_thi',[CarController::class,'hien_thi']);