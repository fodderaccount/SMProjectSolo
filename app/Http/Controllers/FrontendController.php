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

        return view('client.pages.index', compact('product'));
    }
    public function about()
    {
        return view('client.pages.about');
    }
    public function menu()
    {
        return view('client.pages.menu');
    }
    public function order()
    {
        return view('client.pages.order');
    }
    public function faq()
    {
        return view('client.pages.faq');
    }
    
}
