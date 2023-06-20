<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RolesAndPermissionsSeeder::class,
            CategorySeeder::class,
            JobSeeder::class,
            PageSeeder::class,
            ReviewsSeeder::class,
        ]);
        
        //\App\Models\User::factory(10)->create();


    }
}
