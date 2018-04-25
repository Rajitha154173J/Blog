<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CatagoryController extends Controller
{
    public function catagory(){
       
        return view('catagories.category');
    }

    public function addcategory(Request $request){

        $this->validate($request,[
            'category'=> 'required',
            ]);
      
        $category= new Category;
        $category->category=$request['category'];
        $category->save();
        return redirect('/catagory')->with('response', 'category added successfully');
    }
}
