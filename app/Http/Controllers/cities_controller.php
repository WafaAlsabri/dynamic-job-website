<?php

namespace App\Http\Controllers;
use App\Models\cities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cities_controller extends Controller
{
    function index(){
        return view('admin.add_city');
           }
    function list(){
        $data=array(
            'list'=>DB::table('cities')->get()
            );
            
            //$emp=Part::all();
            
                return view('admin.show_cities',$data);
           // return view('admin.show_cities');
               }


             

public function store(Request $request){
    $request->validate([
        'name' =>'required',
        

      
       
    ]);

    $student=new cities;
    $student->name=$request->input('name');
   
    $student->save();
    return back()->with('success','data have been succufly inserted');

  //  return view('user.add_info');

}

function delete($id){
    $delete=DB::table('cities')
    ->where("id",$id)
    ->delete();
    return redirect('show_cities');
}
}
