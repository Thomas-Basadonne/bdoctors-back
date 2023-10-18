<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('stars')->insert([
                'vote' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
