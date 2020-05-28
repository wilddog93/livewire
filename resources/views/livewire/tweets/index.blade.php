<div>
    <div class="card">
        <div class="card-header">Timeline</div>

        <div class="card-body">
            @foreach ($tweets as $tweet)
                <livewire:tweets.single :key="$tweet->id" :tweet="$tweet">
            @endforeach
            {{-- {{ $tweets->links() }} ini menggunakan paginate biasa --}}
            @if ($tweets->hasMorePages()) {{-- artinya adalah jika $tweets->total() !== $tweets->lastItem() maka return button --}}             
                <div class="btn btn-primary" wire:click.prevent="loadMore">Load more!</i></div>
            @endif
        </div>
    </div>
</div>
