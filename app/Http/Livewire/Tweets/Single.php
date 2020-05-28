<?php

namespace App\Http\Livewire\Tweets;

use Livewire\Component;

class Single extends Component
{
    public $tweet;

    public function mount($tweet)
    {
        $this->tweet = $tweet;
    }

    public function render()
    {
        return view('livewire.tweets.single');
    }
}
