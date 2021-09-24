@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Select Meal Options</h1>
        <form action="{{ route('meal.store') }}" method="POST">
            @csrf
            <div class="input-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                @foreach ($categories as $category)
                    <div>
                        <label for="">{{ ucfirst($category->name) }}</label>
                        <select type="text" name="{{ $category->name }}" id="">
                            @foreach ($types as $type)
                                @if ($category->id === $type->category_id)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('type_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach

                <div>
                    <label for="name" required>Date</label>
                    <input type="date" name="meal_date" id="" value="{{ old('meal_date') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
@endsection
