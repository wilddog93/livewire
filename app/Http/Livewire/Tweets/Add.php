<?php

namespace App\Http\Livewire\Tweets;

use Livewire\Component;

class Add extends Component
{
    public $body;

    public function updated($fields) //function ini membuat error otomatis keluar saat melakukan pengisian form
    {
        $this->validateOnly($fields, [
            'body' => ['min:3', 'max:255'],
        ]);
    }

    public function addTweet()
    {
        $this->validate([
            'body' => ['required', 'max:255'],
        ]);

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