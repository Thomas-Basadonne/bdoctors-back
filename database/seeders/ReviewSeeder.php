<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // $usersIDs = DB::table('users')->pluck('id');



        // foreach (range(1, 50) as $index) {
        //     DB::table('reviews')->insert([
        //         'user_id' => $faker->randomElement($usersIDs),
        //         'name' => $faker->firstName,
        //         'lastname' => $faker->lastName,
        //         'email' => $faker->unique()->safeEmail,
        //         'text' => $faker->paragraph,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        $reviews = [
            [
                'user_id' => '2',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Il dottore è super competente e molto simpatico',
                'rating' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '3',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Il dottore è super competente e molto simpatico',
                'rating' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '4',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Il dottore è super competente e molto simpatico',
                'rating' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '5',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Il dottore è super competente e molto simpatico',
                'rating' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '6',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Il dottore è super competente e molto simpatico',
                'rating' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];
            foreach ($reviews as $reviewData) {
                Review::create($reviewData);
            }
    }
}
