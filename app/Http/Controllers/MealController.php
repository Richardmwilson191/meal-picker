<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MealType;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $types = MealType::all();
        return view('type.index', ['types' => $types]);
    }

    public function create()
    {
        $categories = Category::all();
        $types = MealType::all();

        return view('meal.create', ['categories' => $categories, 'types' => $types]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cat_id' => 'required',
        ]);

        MealType::create([
            'name' => $request->name,
            'cat_id' => $request->cat_id,
        ]);

        return redirect(route('type.index'));
    }
}
