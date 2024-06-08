<div class="flex justify-center mt-4">
    @auth
        @if ($quantity > 0)
            <div class="flex items-center">
                <button 
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-l-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400"
                    wire:click="decrementQuantity"
                >
                    -
                </button>
                <span class="px-4 py-2 bg-gray-100 text-gray-700">{{ $quantity }}</span>
                <button 
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-r-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400"
                    wire:click="incrementQuantity"
                >
                    +
                </button>
            </div>
        @else
            <button 
                class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                wire:click="addToCart"
            >
                Agregar al carrito
            </button>
        @endif
    @endauth
    @guest
        <button 
            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
            onclick="window.location='{{ route('login') }}'"
        >
            Agregar al carrito
        </button>
    @endguest
</div>