<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;
use App\Models\MealType;
use App\Models\User;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::all();

        $users = User::with('meal.mealType.category')->get();
        return view('meal.index', ['users' => $users, 'meals' => $meals]);
    }

    public function create()
    {
        $categories = Category::all();
        $types = MealType::all();

        return view('meal.create', ['categories' => $categories, 'types' => $types]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'starch' => 'required',
            'meat' => 'required',
            'vegetable' => 'required',
            'beverage' => 'required',
            'meal_date' => 'required',
        ]);


        $categories = Category::all();
        foreach ($validated as $key => $value) {
            foreach ($categories as $category) {
                if ($key == $category->name) {
                    Meal::create([
                        'user_id' => auth()->user()->id,
                        'meal_type_id' => $value,
                        'meal_date' => $request->meal_date
                    ]);
                }
            }
        }

        return redirect(route('meal.index'));
    }
}
