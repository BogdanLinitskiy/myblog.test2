<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h2 class="text-center">Latest products:</h2>
        </div>

        @foreach($freshProducts as $product)

            <div class="col-md-4">
                <h2>{{ $product['title'] }}</h2>
                <p> {{ $product['price'] }}$ </p>
                <p> {{ $product['description'] }}$ </p>
                <p><a class="btn btn-primary" href="/products/{{ $product['slug'] }}" role="button">View details »</a></p>
                <p><a class="btn btn-success" href="/cart/{{$product['slug']}}" >Buy</a></p>
            </div>

        @endforeach
    </div>
</div>

<hr>