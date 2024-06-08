<div>
    <h1>Your Cart</h1>
    <ul>
        @foreach($cart->items as $item)
            <li>
                {{ $item->product->name }} - ${{ $item->product->price }} x {{ $item->quantity }}
                <button wire:click="removeFromCart({{ $item->id }})">Remove</button>
            </li>
        @endforeach
    </ul>
    <p>Total: ${{ $cart->items->sum(fn($item) => $item->product->price * $item->quantity) }}</p>
    <button wire:click="checkout">Checkout</button>
</div>
