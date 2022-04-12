<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\cities;

class home_controller extends Controller
{
    function index(){
       // return view('index');
       return view('index', [
           'cities' => cities::get(),
         
        
        ]);
        
          }
          function jobs(){
            return view('jobs');
           // return view('add_job', [
             //   'cities' => cities::get(),
             
            
          //  ]);
            
              }
              
              function dashboard(){
                return view('dashboard');
               // return view('add_job', [
                 //   'cities' => cities::get(),
                 
                
              //  ]);
                
                  }
}
