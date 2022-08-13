<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Prodindex(){
        $product = Product::all();
        return view('pages.listProduct', compact('product'));
    }

    public function getAddProduct(){
        $categories = Category::all();
        return view('pages.addProduct', ['categories'=>$categories]);
    }

    public function postAddProduct(Request $request)
    {
            $product=new Product();
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('uploads/img/', $filename);
                $product->image=$filename;
            }
            
            $product->name=$request->input('name');
            $product->price=$request->input('price');
            $product->description=$request->input('description');
            $product->category_id=$request->input('category_id');
            $product->save();
            return redirect()->route('products.index')->with('success', 'Add New Product Successfully!');
        
    }
    
}
