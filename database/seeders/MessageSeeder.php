<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Message;

class MessageSeeder extends Seeder
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
        //     DB::table('messages')->insert([
        //         'user_id' => $faker->randomElement($usersIDs),
        //         'name' => $faker->firstName,
        //         'lastname' => $faker->lastName,
        //         'email' => $faker->unique()->safeEmail,
        //         'text' => $faker->paragraph,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        $messages = [
            [
                'user_id' => '2',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Salve dottore, la cura che mi ha dato funziona alla grande',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '3',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Salve dottore, la cura che mi ha dato funziona alla grande',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '4',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Salve dottore, la cura che mi ha dato funziona alla grande',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '5',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Salve dottore, la cura che mi ha dato funziona alla grande',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '6',
                'name' => 'Pippo',
                'lastname' => 'Verdi',
                'email' => 'pippo@mail.com',
                'text' => 'Salve dottore, la cura che mi ha dato funziona alla grande',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];
            foreach ($messages as $messageData) {
                Message::create($messageData);
            }
    }
}
