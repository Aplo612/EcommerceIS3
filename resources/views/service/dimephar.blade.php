<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center min-h-screen">
        @livewire('product-index')
    </div>
</x-app-layout>
