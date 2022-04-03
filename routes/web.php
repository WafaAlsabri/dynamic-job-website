<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
});

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

