<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            UserSeeder::class,
            ProfileSeeder::class,
            MessageSeeder::class,
            ReviewSeeder::class,
            SponsorshipSeeder::class,
            StarSeeder::class,
            TypologySeeder::class
        ]);
    }
}
