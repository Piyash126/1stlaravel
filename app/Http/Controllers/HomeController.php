<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function add_data(){
        return view('home.home');
    }
    public function add_product(Request  $request){
        $product=new blogs;

        $product->title=$request->title;
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->descrption=$request->desc;
        $product->tag=$request->tag;

        

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');

    }
}
