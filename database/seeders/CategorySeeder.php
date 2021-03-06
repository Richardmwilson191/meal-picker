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
            'name' => 'starch'
        ],
        [
            'name' => 'meat'
        ],
        [
            'name' => 'vegetable'
        ],
        [
            'name' => 'beverage'
        ],
    ];

    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create($category);
        }
    }
}
