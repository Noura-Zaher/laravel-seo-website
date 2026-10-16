<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
{
    $products = Product::where('is_active', true)->get();
    $categories = Category::where('is_active', true)->get();

    $content = view('sitemap', compact('products', 'categories'))->render();

    $xmlContent = '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . $content;

    return response($xmlContent, 200)
             ->header('Content-Type', 'text/xml');
}
}
