<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cities_controller extends Controller
{
    function index(){
        return view('admin.add_city');
           }
    function list(){
            return view('admin.show_cities');
               }

public function store(Request $request){
    $request->validate([
        'name' =>'required',
        

      
       
    ]);

    $student=new Personal_data;
    $student->name=$request->input('name');
   
    $student->save();
    return redirect()->back()->with('statuse','city added success');

  //  return view('user.add_info');

}
}
