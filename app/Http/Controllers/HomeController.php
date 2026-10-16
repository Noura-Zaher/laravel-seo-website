<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController{

public function index(){
    $categories =Category::with('products')->get();
    $products=Product::with('category')->paginate(6);

    return view('home',compact('categories','products'));

}

public function show($slug){
    $product=Product::with('category')->where('slug',$slug)->firstOrFail();
    return view('product_details',compact('product'));
}


}
