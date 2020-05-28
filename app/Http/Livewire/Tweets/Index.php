<?php

namespace App\Http\Livewire\Tweets;

use App\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination; // ->class ini di livewire untuk menghilangkan reload

    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage+= 10;
    }

    public function render()
    {
        $tweets = Tweet::latest()->paginate($this->perPage);

        return view('livewire.tweets.index', compact('tweets'));
    }
}
