<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SponsorshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                'name' => '24 ore di sponsorizzazione',
                'price' => 2.99,
                'duration' => '24:00:00', // 24 ore
            ],
            [
                'name' => '72 ore di sponsorizzazione',
                'price' => 5.99,
                'duration' => '72:00:00', // 72 ore
            ],
            [
                'name' => '144 ore di sponsorizzazione',
                'price' => 9.99,
                'duration' => '144:00:00', // 144 ore
            ],
        ];


        foreach ($sponsorships as $sponsorship) {
            DB::table('sponsorships')->insert([
                'name' => $sponsorship['name'],
                'price' => $sponsorship['price'],
                'duration' => $sponsorship['duration'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $faker = Faker::create();

        $usersIDs = DB::table('users')->pluck('id');
        $sponsorIDs = DB::table('sponsorships')->pluck('id');

        foreach (range(1, 50) as $index) {
            DB::table('user_sponsorship')->insert([
                'user_id' => $faker->randomElement($usersIDs),
                'sponsorship_id' => rand(1, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
