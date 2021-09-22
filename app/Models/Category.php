<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name'];

    public function mealType()
    {
        return $this->hasMany(MealType::class);
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
