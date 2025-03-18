<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/',[PublicController::class,'home'])->name('welcome');


Route::get('/products/create',[ProductController::class,'create'])->name('products.create')->middleware('auth');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store')->middleware('auth');
Route::get('/products/index',[ProductController::class,'index'])->name('products.index');

Route::get('/products/show/{product}',[ProductController::class,'show'])->name('products.show')->middleware('auth');

