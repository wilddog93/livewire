<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $carts = auth()->user()->carts;
        return view('livewire.carts.index', compact('carts'));
    }
}
