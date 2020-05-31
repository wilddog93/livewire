<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;

class Counter extends Component
{
    protected $listeners = ['addedToCart', 'removeFromCart'];
    
    public $cartCounter = 0;

    public function mount()
    {
        $this->cartCounter = auth()->user()->carts()->count();    
    }

    public function addedToCart()
    {
        $this->cartCounter += 1;
    }

    public function removeFromCart()
    {
        $this->cartCounter -= 1;
    }

    public function render()
    {
        return view('livewire.carts.counter');
    }
}
