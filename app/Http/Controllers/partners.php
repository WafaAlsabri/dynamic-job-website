<?php

namespace App\Http\Controllers;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class partners extends Controller
{
   function index(){
return view('add_job');


   }
   function index1(){
$data=array(
'list'=>DB::table('partners')->get()
);

//$emp=Part::all();

    return view('show_partners',$data);
    
       }
function add(Request $request){

    $request->validate([
        'name' =>'required',
        
        'sector' =>'required',
        'address' =>'required',
        'num_emp' =>'required',
       
    ]);


$student=new Part;
$student->name=$request->input('name');
$student->sector=$request->input('sector');
$student->address=$request->input('address');
$student->num_emp=$request->input('num_emp');
if($request->hasfile('image')){

    $file=$request->file('image');
    $extention=$file->getClientOriginalExtension();
    $filename=time().'.'.$extention;
    $file->move('upload/info/',$filename);
    $student->image=$filename;
}
$student->save();
return redirect()->back()->with('statuse','student image added success');
//return $request->input();
/*$request->validate([
    'name' =>'required',
    
    'sector' =>'required',
    'address' =>'required',
    'num_emp' =>'required',
]);
$query=DB::table('partners')->insert([

    'name' =>$request->input('name'),
  
    'sector' =>$request->input('sector'),
    'address' =>$request->input('address'),
    'num_emp' =>$request->input('num_emp'),
    if($request->hasfile('image')){
        $file=$request->file(image);
        extention=$file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('uplodes/partners/',$filename);
        'image'=$filename;
    }
    'image'->save();
    return redirect()->back()->with('statuse','student image added success');
]);


if($query){
return back()->with('success','data have been succufly inserted');

}
else{
    return back()->with('fail','some thing was wrong');  
}
*/
}

function delete($id){
    $delete=DB::table('partners')
    ->where("id",$id)
    ->delete();
    return redirect('show_partners');
}

}
