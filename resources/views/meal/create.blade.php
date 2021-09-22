@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a course</h1>
        <form action="{{ route('meal.store') }}" method="POST">
            @csrf
            <div class="input-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <div>
                    <label for="cat_id" required>Category</label>
                    @foreach ($categories as $category)
                        <label for="">{{ ucfirst($category->name) }}</label>
                        <select type="text" name="{{ $category->name }}" id="" value="{{ old($category->name) }}">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    @endforeach
                    @error('cat_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="type_id" required>Meal Type</label>
                    <select type="text" name="type_id" id="" value="{{ old('type_id') }}">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="name" required>Name</label>
                    <input type="date" name="date" id="" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="submit" value="Create">
                </div>
            </div>
        </form>
    </div>
@endsection
