<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsorship;
use App\Models\User;


class UserSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = Sponsorship::all()->pluck('id');
            $users = User::all();

            $users[1]->sponsorships()->attach([1]);
            $users[2]->sponsorships()->attach([2]);
            $users[3]->sponsorships()->attach([3]);
    }
}
