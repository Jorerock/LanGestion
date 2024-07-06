<?php

use Illuminate\Support\Facades\Route;

Route::get('/guide', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});




Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [
            [
                'id'=> '1',
                'title' => 'chef',
                'salary'=> '20000000'                         
            ],
            [
                'id'=> '2',
                'title' => 'sbire',
                'salary'=> '1'      
            ],
            [
                'id'=> '3',
                'title' => 'pouet',
                'salary'=> '500'      
            ]
        ]

    ]);
});




Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id'=> '1',
            'title' => 'chef',
            'salary'=> '20000000'                         
        ],
        [
            'id'=> '2',
            'title' => 'sbire',
            'salary'=> '1'      
        ],
        [
            'id'=> '3',
            'title' => 'pouet',
            'salary'=> '500'      
        ]
        ];
        
     $job =   \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

    dd($job);

    return view('job', ['job'=>$job]);
});






Route::get('/about', function () {
    return view('about');
});
