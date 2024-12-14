<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('venues')->insert([
            ['name' => 'Conference Hall', 'description' => 'A spacious hall for conferences.', 'capacity' => 200],
            ['name' => 'Banquet Hall', 'description' => 'Perfect for weddings and banquets.', 'capacity' => 300],
            ['name' => 'Meeting Room', 'description' => 'Ideal for business meetings.', 'capacity' => 50],
        ]);
    }
}
