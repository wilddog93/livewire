<div>
    <div class="media">
        <div class="media-body">
            <h5 class="mb-0">{{ $tweet->user->name }}</h5>
            <small class=text-secondary>Tweeted {{ $tweet->created_at->diffForHumans() }}</small>
            <p>{{ $tweet->body }}</p>
        </div>
    </div>
</div>
