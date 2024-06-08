<div class="px-20 pt-4 pb-8 w-4/5">
    <div class="mb-4 flex items-center">
        <input 
            type="text" 
            wire:model.live="search" 
            placeholder="Busca un producto..." 
            class="px-4 py-2 border rounded-md mr-4"
        >
        <select 
            wire:model.live="category" 
            class="px-4 py-2 border rounded-md w-52"
        >
            <option value="">Todas las categorias</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div 
                class="border rounded-lg shadow-lg p-4 bg-white"
                >
                <a class="cursor-pointer" onclick="window.location='{{ route('product.show', $product->id) }}'">
                    <img 
                        src="{{ asset('images/dimephar-product.jpg') }}" 
                        alt="{{ $product->name }}" 
                        class="w-full h-48 object-cover mb-4"
                    >
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                    <p class="text-gray-700">{{ $product->description }}</p>
                    <p class="text-green-500 font-bold mt-2">${{ $product->price }}</p>
                </a>
                <div class="flex justify-center mt-4">
                    @auth
                        @if (array_key_exists($product->id, $this->cartItems))
                            <div class="flex items-center">
                                <button 
                                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-l-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400"
                                    wire:click="decrementQuantity({{ $product->id }})"
                                >
                                    -
                                </button>
                                <span class="px-4 py-2 bg-gray-100 text-gray-700">{{ $this->cartItems[$product->id] }}</span>
                                <button 
                                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-r-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400"
                                    wire:click="incrementQuantity({{ $product->id }})"
                                >
                                    +
                                </button>
                            </div>
                        @else
                            <button 
                                class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                                wire:click="addToCart({{ $product->id }})"
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
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
