<?php

namespace App\Http\Livewire\Products;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public $perPage = 10;

    public function render()
    {
        $products = Product::paginate($this->perPage);
        return view('livewire.products.index', compact('products'));
    }
}
