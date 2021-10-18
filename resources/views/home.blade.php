@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Dashboard
                </header>

                @if (auth()->user()->role === 'admin')

                    <div class="w-full p-6">
                        <a href="{{ route('category.create') }}">Create Category</a>
                    </div>
                    <div class="w-full p-6">
                        <a href="{{ route('type.create') }}">Create Meal Type</a>
                    </div>
                @endif

                @if (auth()->user()->role === 'student')
                    <div class="w-full p-6">
                        <button
                            class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight"
                            onclick="Livewire.emit('openModal', 'meal-choice-component')">Select Meal Choice</button>

                        @livewire('livewire-ui-modal')
                    </div>
                @endif
            </section>
        </div>
    </main>
@endsection
