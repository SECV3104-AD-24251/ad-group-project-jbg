<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\coach;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'ADMIN',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);

         // Create an example admin account
         \App\Models\User::factory()->create([
        'name' => 'Admin Example',
        'email' => 'admin1@gmail.com',
        'role' => 'admin',
        'password' => bcrypt('123456789'), // Replace 'securepassword' with your preferred password
        ]);

        // making coach users
        \App\Models\User::factory()->create([
            'name' => 'COACH',
            'email' => 'coach@coach.com',
            'role' => 'coach',
            'password' => bcrypt('coach'),
        ]);
        // filling the coach table

        \App\Models\User::factory()->create([
            'name' => 'COACH 1',
            'email' => 'coach@gmail.com',
            'role' => 'coach',
            'password' => bcrypt('123456789'),
        ]);
        // f
        coach::factory()->create([
            'name' => 'Zakaria El Azzouzi',
            'user_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            'image' => 'vectimg.png',
            'sport' => 'football',
            'price' => 100,
            'location' => 'Casablanca',
            'status' => 'available',
            'rating' => 5,
            'yearsofexperience' => 5,
        ]);
    }
}