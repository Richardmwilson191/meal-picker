@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
        <div class="w-full p-6">
            <a href="{{ route('category.create') }}">Create Category</a>
        </div>
        <ul class="ml-4">
            @foreach ($categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
