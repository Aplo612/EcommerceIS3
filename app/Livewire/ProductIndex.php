<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $category = null;
    public $cartItems = [];

    protected $listeners = ['productAddedToCart' => 'updateCartCount'];

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            if ($cart) {
                $this->cartItems = $cart->items->pluck('quantity', 'product_id')->toArray();
            }
        }
    }

    public function addToCart($productId)
    {
        $user = Auth::user();

        $cart = Cart::firstOrCreate(
            ['user_id' => $user->id],
            ['user_id' => $user->id]
        );

        $cartItem = CartItem::firstOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $productId],
            ['quantity' => 0]
        );

        $cartItem->quantity += 1;
        $cartItem->save();

        $this->cartItems[$productId] = $cartItem->quantity;
        $this->dispatch('productAddedToCart');

        session()->flash('message', 'Producto agregado al carrito');
    }

    public function incrementQuantity($productId)
    {
        $this->addToCart($productId);
    }

    public function decrementQuantity($productId)
    {
        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)->first();
        if ($cart) {
            $cartItem = CartItem::where('cart_id', $cart->id)
                ->where('product_id', $productId)
                ->first();

            if ($cartItem && $cartItem->quantity > 0) {
                $cartItem->quantity -= 1;
                $cartItem->save();

                if ($cartItem->quantity == 0) {
                    unset($this->cartItems[$productId]);
                    $cartItem->delete();
                } else {
                    $this->cartItems[$productId] = $cartItem->quantity;
                }
            }
        }

        $this->dispatch('productAddedToCart');
    }

    public function render()
    {
        $categories = Category::all();

        $products = Product::where('name', 'like', '%' . $this->search . '%')
            ->when($this->category, function ($query) {
                $query->where('category_id', $this->category);
            })
            ->paginate(9);

        return view('livewire.product-index', compact('products', 'categories'));
    }
}

