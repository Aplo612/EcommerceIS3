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
            <div class="border rounded-lg shadow-lg p-4 bg-white">
                <img 
                    src="{{ asset('images/dimephar-product.jpg') }}" 
                    alt="{{ $product->name }}" 
                    class="w-full h-48 object-cover mb-4"
                >
                <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-700">{{ $product->description }}</p>
                <p class="text-green-500 font-bold mt-2">${{ $product->price }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
