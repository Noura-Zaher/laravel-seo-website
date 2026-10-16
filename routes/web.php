<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
 Route::get('/',[HomeController::class,'index']);
 Route::get('/products/{sulg}',[HomeController::class,'show']);
 Route::get('/about',[PageController::class,'about']);
 Route::get('/contact',[PageController::class,'contact']);
 Route::get('/categories',[CategoryController::class,'index']);
 Route::get('/categories/{slug}',[CategoryController::class,'show']);
 Route::get('/sitemap.xml',[SitemapController::class,'index']);
 Route::get('/products',[ProductController::class,'index']);
