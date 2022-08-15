<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('client.index', compact('product'));
    }
    public function about()
    {
        return view('client.about');
    }
    public function menu()
    {
        return view('client.menu');
    }
    public function order()
    {
        return view('client.order');
    }
    public function faq()
    {
        return view('client.faq');
    }
    
}
