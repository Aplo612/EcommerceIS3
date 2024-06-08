<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartButton extends Component
{
    public $productId;
    public $quantity = 0;

    protected $listeners = ['productAddedToCart' => 'updateQuantity'];

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->loadCart();
    }

    public function loadCart()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            if ($cart) {
                $cartItem = $cart->items()->where('product_id', $this->productId)->first();
                if ($cartItem) {
                    $this->quantity = $cartItem->quantity;
                }
            }
        }
    }

    public function addToCart()
    {
        $user = Auth::user();

        $cart = Cart::firstOrCreate(
            ['user_id' => $user->id],
            ['user_id' => $user->id]
        );

        $cartItem = CartItem::firstOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $this->productId],
            ['quantity' => 0]
        );

        $cartItem->quantity += 1;
        $cartItem->save();

        $this->quantity = $cartItem->quantity;

        $this->dispatch('productAddedToCart');

        session()->flash('message', 'Producto agregado al carrito');
    }

    public function incrementQuantity()
    {
        $this->addToCart();
    }

    public function decrementQuantity()
    {
        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)->first();
        if ($cart) {
            $cartItem = CartItem::where('cart_id', $cart->id)
                ->where('product_id', $this->productId)
                ->first();

            if ($cartItem && $cartItem->quantity > 0) {
                $cartItem->quantity -= 1;
                $cartItem->save();

                if ($cartItem->quantity == 0) {
                    $this->quantity = 0;
                    $cartItem->delete();
                } else {
                    $this->quantity = $cartItem->quantity;
                }
            }
        }

        $this->dispatch('productAddedToCart');
    }

    public function render()
    {
        return view('livewire.cart-button');
    }
}