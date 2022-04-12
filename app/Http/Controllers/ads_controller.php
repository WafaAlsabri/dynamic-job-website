<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\ads;
use Illuminate\Support\Facades\DB;

class ads_controller extends Controller
{
    function index(){
       // return view('add_ads');
       return view('admin.add_ads', [
            'paerners' => Part::get(),
         
        
       ]);
        
           }
           function index1(){
        $data=array(
        'list'=>DB::table('ads')->get()
        );
        
  
         return view('admin.show_ads',$data);
            
               }
        function add(Request $request){
        
            $request->validate([
                'name' =>'required',
                
                'descreption' =>'required',
                //'address' =>'required',
               // 'num_emp' =>'required',
               
            ]);
        
        
        $student=new ads;
        $student->name=$request->input('name');
        $student->descreption=$request->input('descreption');
      //  $student->address=$request->input('address');
       // $student->num_emp=$request->input('num_emp');
        $student->id_partners=$request->id_partners;
        if($request->hasfile('image')){
        
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('upload/info/',$filename);
            $student->image=$filename;
        }
        $student->save();
        return back()->with('success','data have been succufly inserted');
       
        }
        
        function delete($id){
            $delete=DB::table('ads')
            ->where("id",$id)
            ->delete();
            return redirect('show_ads');
        }
}
