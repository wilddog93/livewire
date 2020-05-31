<div class="container">
    <div class="row">
        @foreach ($carts as $cart)    
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">{{ $cart->name }}</div>
                    <div class="card-body">{{ $cart->description }}</div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                            <sup>Rp</sup> {{ number_format($cart->price) }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
