<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        //return Product::all();
        return view('frontend.product.product',['products'=>Product::all()]);
    }
}
