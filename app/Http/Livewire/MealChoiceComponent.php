<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;
use LivewireUI\Modal\ModalComponent;

class MealChoiceComponent extends ModalComponent
{
    public $arr = [];
    public $beverage;
    public $meat;
    public $starch;
    public $vegetable;
    public $date;

    public function store()
    {

        array_push($this->arr, $this->beverage, $this->meat, $this->starch, $this->vegetable);
        foreach ($this->arr as $food_id) {
            Meal::create([
                'user_id' => auth()->user()->id,
                'meal_type_id' => $food_id,
                'meal_date' => $this->date
            ]);
        }

        $this->closeModal();
        // $categories = Category::all();
        // foreach ($categories as $cat) {
        // }
        // foreach ($validated as $key => $value) {
        //     foreach ($categories as $category) {
        //         if ($key == $category->name) {
        //             Meal::create([
        //                 'user_id' => auth()->user()->id,
        //                 'meal_type_id' => $value,
        //                 'meal_date' => $request->meal_date
        //             ]);
        //         }
        //     }
        // }
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.meal-choice-component', compact('categories'));
    }
}
