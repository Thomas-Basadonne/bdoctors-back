<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Bronze Plan',
                'slug' => 'bronze-plan',
                'stripe_plan' => 'price_1O6xDwBvuKX914kfApIZloY7',
                'price' => 2.99,
                'description' => 'Bronze plan',
            ],
            [
                'name' => 'Silver Plan',
                'slug' => 'silver-plan',
                'stripe_plan' => 'price_1O6xFKBvuKX914kfCbOcO6w4',
                'price' => 5.99,
                'description' => 'Silver plan',
            ],
            [
                'name' => 'Gold Plan',
                'slug' => 'gold-plan',
                'stripe_plan' => 'price_1O6xFyBvuKX914kfQtqwVN7K',
                'price' => 9.99,
                'description' => 'Gold plan',
            ]

        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
};
