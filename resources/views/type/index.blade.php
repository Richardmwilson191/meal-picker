@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Meal Types</h1>
        <div class="w-full p-6">
            <a href="{{ route('type.create') }}">Create Meal Type</a>
        </div>
        <ul class="ml-4">
            @foreach ($types as $type)
                <li>{{ $type->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
