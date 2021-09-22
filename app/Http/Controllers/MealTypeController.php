<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MealType;
use Illuminate\Http\Request;

class MealTypeController extends Controller
{
    public function index()
    {
        $types = MealType::all();
        return view('meal.index', ['types' => $types]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('type.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cat_id' => 'required',
            'm_type_id' => 'required',
            'date' => 'required',
        ]);

        MealType::create([
            $validated
        ]);

        return redirect(route('meal.create'));
    }
}
