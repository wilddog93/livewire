<div>
    @if (auth()->user()->addedToCart($product))
        <button class="btn btn-danger btn-sm" wire:click.prevent="removeFromCart">Remove From Cart</button>
    @else
        <button class="btn btn-primary btn-sm" wire:click.prevent="addToCart">Add To Cart</button>
    @endif
</div>
