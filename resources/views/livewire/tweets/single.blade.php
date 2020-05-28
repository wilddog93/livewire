<div>
    <div class="media">
        <img src="{{ $tweet->user->avatar() }}" class="rounded-circle mr-3" width="50">
        <div class="media-body">
            <h5 class="mb-0">{{ $tweet->user->name }}</h5>
            <small class=text-secondary>Tweeted {{ $tweet->created_at->diffForHumans() }}</small>
            <p>{{ $tweet->body }}</p>
        </div>
    </div>
</div>
