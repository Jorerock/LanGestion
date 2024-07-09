<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;




Route::get('/guide', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');

});




Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => job::all()
      
    ]);
});

Route::get('/jobs/{id}', function ($id){
 
     $job =   job::find($id);

    return view('job', ['job'=>$job]);
});


Route::get('/about', function () {
    return view('about');
});
