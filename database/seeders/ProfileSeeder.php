<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $usersIDs = DB::table('users')->pluck('id');

        foreach (range(1, 50) as $index) {
            DB::table('profiles')->insert([
                'user_id' => $faker->randomElement($usersIDs),
                'description' => $faker->paragraph,
                'services' => $faker->text,
                'address' => $faker->address,
                'photo' => $faker->imageUrl(200, 200),
                'visible' => $faker->numberBetween(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
