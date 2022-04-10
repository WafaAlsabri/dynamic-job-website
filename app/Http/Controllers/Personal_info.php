<?php

namespace App\Http\Controllers;
use App\Models\Personal_data;
use Illuminate\Http\Request;

class Personal_info extends Controller
{
    function index(){
        return view('user.add_info');
           }
    function list(){
            return view('user.show_info');
               }

public function store(Request $request){
    $request->validate([
        'name' =>'required',
        
        'email' =>'required',
        'address' =>'required',
      
       
    ]);

    $student=new Personal_data;
    $student->name=$request->input('name');
    $student->email=$request->input('email');
    $student->address=$request->input('address');
    //$num_emp->profile=$request->input('profile');
    if($request->hasfile('profile')){

        $file=$request->file('profile');
        $extention=$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('upload/info/',$filename);
        $student->profile=$filename;
    }
    $student->save();
    return redirect()->back()->with('statuse','student image added success');

  //  return view('user.add_info');

}

}
