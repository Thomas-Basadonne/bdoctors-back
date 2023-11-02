<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();

        // $userAdmin = 0;

        // foreach (range(1, 10) as $index) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'email_verified_at' => now(),
        //         'is_admin' => $userAdmin,
        //         'password' => Hash::make('password'), // Puoi impostare una password predefinita
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        $users = [
            [
                'name' => 'Utente Admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => now(),
                'is_admin' => true, 
                'password' => bcrypt('abc12345'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mario Rossi',
                'email' => 'Mario@mail.com',
                'email_verified_at' => now(),
                'is_admin' => false,
                'password' => bcrypt('abc12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laura Bianchi',
                'email' => 'Laura@example.com',
                'email_verified_at' => now(),
                'is_admin' => false, 
                'password' => bcrypt('abc12345'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andrea Ricci',
                'email' => 'Andrea@example.com',
                'email_verified_at' => now(),
                'is_admin' => false,
                'password' => bcrypt('abc12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Giulia Ferrari',
                'email' => 'Giulia@example.com',
                'email_verified_at' => now(),
                'is_admin' => false, 
                'password' => bcrypt('abc12345'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luca Russo',
                'email' => 'Luca@example.com',
                'email_verified_at' => now(),
                'is_admin' => false,
                'password' => bcrypt('abc12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => $user['email_verified_at'],
                'is_admin' => $user['is_admin'],
                'password' => $user['password'],
                'created_at' => $user['created_at'],
                'updated_at' => $user['updated_at'],
            ]);
        }
        
    }
}
