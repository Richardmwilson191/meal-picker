<?php

namespace Database\Seeders;

use App\Models\MealType;
use Illuminate\Database\Seeder;

class MealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $meal_types = [
        [
            'name' => 'Rice',
            'category_id' => 1
        ],
        [
            'name' => 'Potato',
            'category_id' => 1
        ],
        [
            'name' => 'Chicken',
            'category_id' => 2
        ],
        [
            'name' => 'Kidney',
            'category_id' => 2
        ],
        [
            'name' => 'Callaloo',
            'category_id' => 3
        ],
        [
            'name' => 'Steam Cabbage',
            'category_id' => 3
        ],
        [
            'name' => 'Chocolate Tea',
            'category_id' => 4
        ],
        [
            'name' => 'OJ',
            'category_id' => 4
        ],
    ];

    public function run()
    {
        foreach ($this->meal_types as $meal_type) {
            MealType::create($meal_type);
        }
    }
}
