<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index() {
        
        $products = Product::all();
        return view("/products/index")->with("products",$products);
    }

    function show($id) {
        //$product=Product::findOrFail($id);
        $product=Product::find($id);
        //dd($product);
        if(isset($product))
            return view("/products/show")->with("product",$product);
        else
            return redirect("/products");
    }
}
