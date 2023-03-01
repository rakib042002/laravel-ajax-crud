<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/store',[ProductController::class,'store'])->name('product.store');
Route::post('/update',[ProductController::class,'update'])->name('product.update');
Route::post('/delete',[ProductController::class,'destroy'])->name('product.delete');
