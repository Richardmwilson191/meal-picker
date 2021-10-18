<x-modal form-action="store">
    <x-slot name="title">
        Meal Choices
    </x-slot>

    <x-slot name="content">
        <div class="text-sm text-red-400">*If an option is left unselected you will not recieve anything for that
            category
        </div>
        @foreach ($categories as $cat)
            <div class="space-y-2">
                <label for="beverage" class="block font-medium tracking-tight">{{ ucfirst($cat->name) }}</label>
                <select
                    class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"
                    wire:model="{{ $cat->name }}" id="">
                    <option value="">Select {{ ucfirst($cat->name) }}</option>
                    @foreach ($cat->mealType as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
        <div class="space-y-2">
            <label for="date" class="block font-medium tracking-tight">Date</label>
            <input
                class="w-full border border-gray-400 text-gray-800 placeholder-gray-400 rounded focus:border-transparent focus:outline-none focus:shadow-outline px-3 py-2"
                name="date" id="" type="date">
            @error('date')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>


    </x-slot>

    <x-slot name="buttons">
        <div class="flex justify-end">
            {{-- <button wire:click.prevent="store" --}}
            <button type="submit"
                class="inline-flex items-center text-white px-5 py-2 rounded-lg overflow-hidden focus:outline-none bg-indigo-500 hover:bg-indigo-600 font-semibold tracking-tight">
                Submit
            </button>
        </div>
    </x-slot>
</x-modal>
