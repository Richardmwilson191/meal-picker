@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a course</h1>
        <form action="{{ route('type.store') }}" method="POST">
            @csrf
            <div class="input-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <div>
                    <label for="name" required>Name</label>
                    <input type="text" name="name" id="" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="cat_id" required>Category</label>
                    <select type="text" name="cat_id" id="" value="{{ old('cat_id') }}">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('cat_id')
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
