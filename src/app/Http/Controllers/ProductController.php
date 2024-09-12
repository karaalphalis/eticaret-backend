<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        return view("front.product-list");
    }
    public function productDetail(){
        return view("front.product-detail");
    }
}
