<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\FIle;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
        return view('profiles.profile');
    }

    public function addprofile(Request $request){
        $this->validate($request,[
        'name'=> 'required',
        'designation' =>'required',
        'profile_pic' =>'required'
    
    ]);


        $profiles=new Profile;
        $profiles->user_id=Auth::user()->id;
        $profiles->name=$request['name'];
        $profiles->designation=$request['designation'];

        if(Input::hasFile('profile_pic')){
            $file=Input::file('profile_pic');
            $file->move(public_path().'/uploads/',$file->getClientOriginalName());
            $url= URL::to("/").'/uploads/'.$file->getClientOriginalName();
 
        }

        $profiles->profile_pic=$url;
        $profiles-> save();
        return redirect('/home')->with('response', 'Profile added successfully');
        }
}
