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
        for ($i = 0; $i < 10; $i++) {
            //IT Jobs
            $category = Category::find(1);
            Job::create([
                'name' => "Computer Job" . $i,
                'slug' => "comjob-"  . $i,
                'is_featured' => 0,
                'details' => "IT details",
                'price' => rand(99, 999),
                'job_code' => $category->category_code . "00" . $i,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            ])->categories()->attach($category);
        }
        for ($i = 0; $i < 10; $i++) {
            //BPO Jobs
            $category = Category::find(2);
            Job::create([
                'name' => "BPO Job" . $i,
                'slug' => "bpojob-"  . $i,
                'is_featured' => 0,
                'details' => "BPO details",
                'price' => rand(99, 999),
                'job_code' => $category->category_code . "00" . $i,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam",
            ])->categories()->attach($category);
        }
    }
}
