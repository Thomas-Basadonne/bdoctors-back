<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typologies = [
            'Cardiologo',
            'Dermatologo',
            'Ortopedico',
            'Pediatria',
            'Oculista',
            'Ginecologo',
            'Neurologo',
            'Psichiatra',
            'Chirurgo Generale',
            'Dentista',
        ];

        foreach ($typologies as $typology) {
            DB::table('typologies')->insert([
                'name' => $typology,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
