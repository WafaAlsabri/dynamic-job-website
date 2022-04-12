<?php

namespace App\Http\Controllers;
use App\Models\Part;
use App\Models\cities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class partners extends Controller
{
   function index(){
//return view('add_job');
return view('add_job', [
    'cities' => cities::get(),
 

]);

   }
   function index1(){
$data=array(
'list'=>DB::table('partners')->get()
);

//$emp=cities::all();
//view('show_partners', ['emp' => $emp]);
//view('show_partners')->with('emp',$emp);

    //return view('show_partners.index1',compact('$emp'));
 //   return view('show_partners');
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
$student->id_city=$request->id_city;
if($request->hasfile('image')){

    $file=$request->file('image');
    $extention=$file->getClientOriginalExtension();
    $filename=time().'.'.$extention;
    $file->move('upload/info/',$filename);
    $student->image=$filename;
}
$student->save();
return back()->with('success','data have been succufly inserted');
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
