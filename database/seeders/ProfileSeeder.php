<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;


class ProfileSeeder extends Seeder
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
        //     DB::table('profiles')->insert([
        //         'user_id' => $faker->randomElement($usersIDs),
        //         'description' => $faker->paragraph,
        //         'services' => $faker->text,
        //         'address' => $faker->address,
        //         'photo' => $faker->imageUrl(200, 200),
        //         'visible' => $faker->numberBetween(0, 1),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        $profiles = [
            [
                'user_id' => '2',
                'description' => 'Descrizione del primo dottore',
                'services' => 'Servizi offerti dal primo dottore',
                'address' => 'Indirizzo del primo dottore',
                'photo' => '',
                'visible' => true, // O true se si desidera che sia visibile, o false se si desidera nasconderlo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '3',
                'description' => 'Descrizione del secondo dottore',
                'services' => 'Servizi offerti dal secondo dottore',
                'address' => 'Indirizzo del secondo dottore',
                'photo' => '',
                'visible' => true, // O true o false
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '4',
                'description' => 'Descrizione del terzo dottore',
                'services' => 'Servizi offerti dal terzo dottore',
                'address' => 'Indirizzo del terzo dottore',
                'photo' => '',
                'visible' => true, // O true o false
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '5',
                'description' => 'Descrizione del quarto dottore',
                'services' => 'Servizi offerti dal quarto dottore',
                'address' => 'Indirizzo del quarto dottore',
                'photo' => '',
                'visible' => true, // O true o false
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '6',
                'description' => 'Descrizione del quinto dottore',
                'services' => 'Servizi offerti dal quinto dottore',
                'address' => 'Indirizzo del quinto dottore',
                'photo' => '',
                'visible' => true, // O true o false
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($profiles as $profile) {
            Profile::create([
                'user_id' => $profile['user_id'],
                'description' => $profile['description'],
                'services' => $profile['services'],
                'address' => $profile['address'],
                'photo' => $profile['photo'],
                'visible' => $profile['visible'],
                'created_at' => $profile['created_at'],
                'updated_at' => $profile['updated_at'],
            ]);
        }
        
    }
}
