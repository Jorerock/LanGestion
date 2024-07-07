<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class job {

    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $jobs = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(! $jobs)
        {
            abort(404);
        }
        else return $jobs;
    }
}
