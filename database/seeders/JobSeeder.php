<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //IT Jobs
            $category = Category::find(1);
            Job::create([
                'name' => "Web Developer" ,
                'slug' => "webdev"  ,
                'is_featured' => 0,
                'details' => "IT details",
                'price' => rand(99, 999), //Service budget
                'job_code' => $category->category_code,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            ])->categories()->attach($category);

            $category = Category::find(1);
            Job::create([
                'name' => "PHP Developer" ,
                'slug' => "phpdev"  ,
                'is_featured' => 0,
                'details' => "IT details",
                'price' => rand(99, 999), //Service budget
                'job_code' => $category->category_code,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            ])->categories()->attach($category);

            //BPO Jobs
            $category = Category::find(2);
            Job::create([
                'name' => "Technical Support Representative" ,
                'slug' => "techsupp",
                'is_featured' => 0,
                'details' => "BPO details",
                'price' => rand(99, 999),
                'job_code' => $category->category_code,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            ])->categories()->attach($category);

            Job::create([
                'name' => "Customer Service Representative" ,
                'slug' => "cussupp",
                'is_featured' => 0,
                'details' => "BPO details",
                'price' => rand(99, 999),
                'job_code' => $category->category_code,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            ])->categories()->attach($category);

    }
}
