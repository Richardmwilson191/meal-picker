<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $categories = [
        [
            'name' => 'Starch'
        ],
        [
            'name' => 'Meat'
        ],
        [
            'name' => 'Vegetable'
        ],
        [
            'name' => 'Beverage'
        ],
    ];

    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create($category);
        }
    }
}
