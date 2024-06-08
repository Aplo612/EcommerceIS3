<?php

namespace App\Livewire;

use App\Models\Cart as CartModel;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = Auth::user()->cart;
    }

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $this->cart->items()->updateOrCreate(
            ['product_id' => $product->id],
            ['quantity' => 1]
        );
        $this->cart = Auth::user()->cart->fresh();
    }

    public function removeFromCart($itemId)
    {
        $this->cart->items()->findOrFail($itemId)->delete();
        $this->cart = Auth::user()->cart->fresh();
    }

    public function render()
    {
        return view('livewire.cart', ['cart' => $this->cart]);
    }
}
