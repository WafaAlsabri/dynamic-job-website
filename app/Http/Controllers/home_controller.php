<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\cities;
use App\Models\ads;
use App\Models\Personal_data;



class home_controller extends Controller
{
    function index(){
       // return view('index');
       return view('index', [
           'cities' => cities::get(),
           'ads' => ads::get(),
           'partners' => Part::get(),
           
         
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
