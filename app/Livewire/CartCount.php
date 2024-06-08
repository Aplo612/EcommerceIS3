<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCount extends Component
{
    public $count = 0;

    protected $listeners = ['productAddedToCart' => 'updateCartCount'];

    public function mount()
    {
        $this->updateCartCount();
    }

    public function updateCartCount()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            $this->count = $cart ? $cart->items->sum('quantity') : 0;
        } else {
            $this->count = 0;
        }
    }

    public function render()
    {
        return view('livewire.cart-count');
    }
}
