<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function project_details(){
        return view('products.project_details');
    }

    public function product_price(){
        return view('products.product_price');
    }
}
