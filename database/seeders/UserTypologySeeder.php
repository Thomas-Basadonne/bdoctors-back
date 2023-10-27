<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;
use App\Models\User;


class UserTypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typologies = Typology::all()->pluck('id');
            $users = User::all();

            $users[1]->typologies()->attach([1, 2]);
            $users[2]->typologies()->attach([2, 3, 6]);
            $users[3]->typologies()->attach([3, 10]);
            $users[4]->typologies()->attach([8, 7]);
            $users[5]->typologies()->attach([4, 5]);
    }
}
