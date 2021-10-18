@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Meal Types</h1>
        <div class="w-full p-6">
            <a href="{{ route('meal.create') }}">Choose Meal Options</a>
        </div>
        <table>
            <tr>
                <th>Student</th>
                <th>Date</th>
                <th>Meal Choice</th>
                <th>Category</th>
            </tr>
            @foreach ($users as $user)
                @foreach ($user->meal as $meal)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $meal->meal_date }}</td>
                        <td>{{ $meal->mealType->name }}</td>
                        <td>{{ $meal->mealType->category->name }}</td>
                    </tr>
                @endforeach
            @endforeach

        </table>
    </div>
    <div>
        {{ Auth::user()->meal }}
    </div>
@endsection
