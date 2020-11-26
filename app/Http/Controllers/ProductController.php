<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function homepage(){
        $products = Product::All();
        return view('homepage',['products'=>$products]);
    }
}
