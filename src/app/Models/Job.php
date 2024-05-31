<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Web programmer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Frontend',
                'salary' => '$80,000'
            ],
            [
                'id' => 3,
                'title' => 'Backend',
                'salary' => '$100,000'
            ]
            
        ]; 
    }

    public static function find(int $id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        
        if (! $job) {
            abort(404);
        }
        return $job;
    } 
}