<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Prodindex(){
        $product = Product::all();
        return view('pages.listProduct', compact('product'));
    }
}
