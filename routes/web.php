<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MealTypeController;
use App\Http\Livewire\MealChoiceComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'roles'])->group(function () {
    Route::get('category', [CatController::class, 'index'])->name('category.index');
    Route::get('category/create', [CatController::class, 'create'])->name('category.create');
    Route::post('category/store', [CatController::class, 'store'])->name('category.store');

    Route::get('type', [MealTypeController::class, 'index'])->name('type.index');
    Route::get('type/create', [MealTypeController::class, 'create'])->name('type.create');
    Route::post('type/store', [MealTypeController::class, 'store'])->name('type.store');

    Route::get('meal', [MealController::class, 'index'])->name('meal.index');
    Route::get('meal/create', [MealController::class, 'create'])->name('meal.create');
    Route::post('meal/store', [MealController::class, 'store'])->name('meal.store');
    // Route::post('store', [MealChoiceComponent::class, 'store'])->name('store');
});
