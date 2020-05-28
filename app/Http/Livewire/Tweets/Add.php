<?php

namespace App\Http\Livewire\Tweets;

use Livewire\Component;

class Add extends Component
{
    public $body;

    public function addTweet()
    {
        $tweet = auth()->user()->tweets()->create([
            'body' => $this->body,
        ]);

        $this->body = '';

        $this->emit('tweetAdded', $tweet->id);
    }

    public function render()
    {
        return view('livewire.tweets.add');
    }
}