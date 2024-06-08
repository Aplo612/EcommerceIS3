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
                    <livewire:cart-button :product-id="$product->id" />
                </div>
            </div>
        </div>
        
        <!-- Nuevo Card para Detalles Adicionales -->
        <div x-data="{ tab: 'long_description' }" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mt-8">
            <div class="flex justify-center">
                <ul class="flex border-b w-full">
                    <li class="w-1/4 text-center">
                        <a :class="{ 'border-l border-t border-r rounded-t text-blue-700 font-semibold': tab === 'long_description' }" class="bg-white inline-block py-2 px-4 w-full" href="#" @click.prevent="tab = 'long_description'">Descripción larga</a>
                    </li>
                    <li class="w-1/4 text-center">
                        <a :class="{ 'border-l border-t border-r rounded-t text-blue-700 font-semibold': tab === 'composition' }" class="bg-white inline-block py-2 px-4 w-full" href="#" @click.prevent="tab = 'composition'">Composición</a>
                    </li>
                    <li class="w-1/4 text-center">
                        <a :class="{ 'border-l border-t border-r rounded-t text-blue-700 font-semibold': tab === 'instructions' }" class="bg-white inline-block py-2 px-4 w-full" href="#" @click.prevent="tab = 'instructions'">Modo de uso</a>
                    </li>
                    <li class="w-1/4 text-center">
                        <a :class="{ 'border-l border-t border-r rounded-t text-blue-700 font-semibold': tab === 'warning' }" class="bg-white inline-block py-2 px-4 w-full" href="#" @click.prevent="tab = 'warning'">Precaución y advertencia</a>
                    </li>
                </ul>
            </div>
            <div x-show="tab === 'long_description'" class="p-4">
                <h2 class="text-xl font-semibold text-gray-900">Descripción larga</h2>
                <p class="mt-2 text-gray-600">{{ $product->long_description }}</p>
            </div>
            <div x-show="tab === 'composition'" class="p-4" x-cloak>
                <h2 class="text-xl font-semibold text-gray-900">Composición</h2>
                <p class="mt-2 text-gray-600">{{ $product->composition }}</p>
            </div>
            <div x-show="tab === 'instructions'" class="p-4" x-cloak>
                <h2 class="text-xl font-semibold text-gray-900">Modo de uso</h2>
                <p class="mt-2 text-gray-600">{{ $product->instructions }}</p>
            </div>
            <div x-show="tab === 'warning'" class="p-4" x-cloak>
                <h2 class="text-xl font-semibold text-gray-900">Precaución y advertencia</h2>
                <p class="mt-2 text-gray-600">{{ $product->warning }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
