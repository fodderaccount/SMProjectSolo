<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function Catindex(){
        $category = Category::all();
        return view('pages.listCategory', compact('category'));

    }
    public function getAddCategory(){
        return view('pages.addCategory');
    }
    public function postAddCategory(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
            ]);
            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $category = new Category;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            return redirect()->route('categories.index')->with('success', 'Add New Category Successfully!');
        }
    }


}
