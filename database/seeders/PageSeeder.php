<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => 'About Us Page. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur omnis corporis, deleniti minus sit recusandae alias dolores odit a, voluptatum nihil temporibus ab est qui ducimus voluptatem totam maxime? Facere.'
        ]);

        Page::create([
            'title' => 'Contact Us',
            'slug' => 'contact-us',
            'content' => 'Contact Us Page. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur omnis corporis, deleniti minus sit recusandae alias dolores odit a, voluptatum nihil temporibus ab est qui ducimus voluptatem totam maxime? Facere.'
        ]);

        Page::create([
            'title' => 'Terms and Agreement',
            'slug' => 'terms',
            'content' => 'Terms Page. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur omnis corporis, deleniti minus sit recusandae alias dolores odit a, voluptatum nihil temporibus ab est qui ducimus voluptatem totam maxime? Facere.'
        ]);
    }
}
