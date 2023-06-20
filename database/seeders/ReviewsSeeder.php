<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reviews::create([
            'title' => 'Great product',
            'content' => 'I really loved this product. It exceeded my expectations.',
            'rating' => 5,
            'user_id' => 1, 
            'job_id' => 1,
        ]);

        Reviews::create([
            'title' => 'Not satisfied',
            'content' => 'The product quality was poor. I would not recommend it.',
            'rating' => 2,
            'user_id' => 2, 
            'job_id' => 1, 
        ]);
    }
}
