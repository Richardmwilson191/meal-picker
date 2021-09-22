<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'meal_type_id', 'meal_date'];

    public function setMealDateAttribute($value)
    {
        $this->attributes['meal_date'] = date_create($value);
    }

    public function getMealDateAttribute($value)
    {
        $this->attributes['meal_date'] = date_format($value, 'jS F Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function mealType()
    {
        return $this->hasMany(MealType::class);
    }
}
