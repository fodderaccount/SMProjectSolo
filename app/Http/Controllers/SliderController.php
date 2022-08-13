<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function index(){
        $slider = Slider::all();
        return view('pages.listSlider', compact('slider'));

    }
    public function getAddSlider(){
        return view('pages.addSlider');
    }
    public function postAddSlider(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'description'=>'required',
            ]);
            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $slider = new Slider;
            $slider->name = $request->name;
            $slider->description = $request->description;
            $slider->save();
            return redirect()->route('categories.index')->with('success', 'Add New Slider Successfully!');
        }
    }

    public function getEditSlider($id){
        $data['cate']=Slider::find($id);
        return view('pages.editSlider',$data);
    }
    public function postEditSlider(Request $request,$id){
        if($request->isMethod('POST')){
            $validator=Validator::make($request->all(),[
                'name'=>'required',
                'description'=>'required',
            ]);

            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $slider=Slider::find($id);
            $slider->name = $request->name;
            $slider->description = $request->description;
            $slider->save();
            return redirect()->route('categories.index')->with('success', 'Edit Slider Successfully!');
        }
    }

    public function deleteSlider($id){
        $slider=Slider::find($id);
        $slider->delete();
        return back();
    }
}
