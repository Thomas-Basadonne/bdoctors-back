<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
    }
}
