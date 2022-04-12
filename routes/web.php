<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\partners;
use App\Http\Controllers\cities_controller;
use App\Http\Controllers\ads_controller;
use App\Http\Controllers\home_controller;
use App\Http\Controllers\Personal_info;
Route::post('add',[partners::class,'add']);
Route::get('delete/{id}',[partners::class,'delete']);
Route::get('add_partners',[partners::class,'index']);
Route::get('show_partners',[partners::class,'index1']);


Route::get('add_info',[Personal_info::class,'index']);
Route::get('show_info',[Personal_info::class,'list']);
Route::post('add_info',[Personal_info::class,'store']);


Route::post('add',[ads_controller::class,'add']);
Route::get('delete/{id}',[ads_controller::class,'delete']);
Route::get('add_ads',[ads_controller::class,'index']);
Route::get('show_ads',[ads_controller::class,'index1']);

Route::get('add_city',[cities_controller::class,'index']);
Route::get('show_cities',[cities_controller::class,'list']);
Route::post('add_city',[cities_controller::class,'store']);

Route::get('/',[home_controller::class,'index']);

Route::get('/jobs',[home_controller::class,'jobs']);
Route::get('/dashboard',[home_controller::class,'dashboard']);




Route::get('/about', function () {
    return view('about');
});

Route::get('/Education.', function () {
    return view('Education');
});

Route::get('/skills.', function () {
    return view('skills');
});

Route::get('/jobs.', function () {
    return view('jobs');
});

Route::get('/sidebar.', function () {
    return view('sidebar');
});

Route::get('/cv.', function () {
    return view('cv');
});

Route::get('/job_details.', function () {
    return view('job_details');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('job_details');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/experince', function () {
    return view('experince');
});

Route::get('/cource', function () {
    return view('cource');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/clints', function () {
    return view('clints');
});

