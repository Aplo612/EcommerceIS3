<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="{{ asset('images/dimephar-product.jpg') }}" alt="{{ $product->name }}">
                </div>
                <div class="mt-4 md:mt-0 md:ml-6">
                    <h1 class="text-2xl font-semibold text-gray-900">{{ $product->name }}</h1>
                    <p class="mt-2 text-gray-600">{{ $product->description }}</p>
                    <p class="mt-4 text-green-500 text-lg font-bold">${{ $product->price }}</p>
                    <button 
                        class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                        onclick="Livewire.emit('addToCart', {{ $product->id }})"
                    >
                        Agregar al carrito
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
