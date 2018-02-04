@extends('template')

@section('content')

    @foreach($products as $product)
        <div class="col-md-4">
            <h2>{{ $product['title'] }}</h2>
            <p> {{ $product['price'] }}$ </p>
            <p><a class="btn btn-primary" href="/products/{{ $product['slug'] }}" role="button">View details »</a></p>
            <p><a class="btn btn-success" href="/cart/{{$product['slug']}}" >Buy</a></p>
            @if(Auth::check())
                <p><a class="btn btn-success" href="/products/{{ $product['slug'] }}/edit" role="button">Edit »</a></p>
                <form action="/products/{{$product->slug}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            @endif
        </div>

    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to Shop</h1>
            <p> This is my poor shop =(</p>
        </div>
    </div>

@endsection