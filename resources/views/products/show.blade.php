@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $product['title'] }}</h2>
        <p> {{ $product['intro'] }} </p>
        <p> {{ $product['price'] }} </p>
        <p> {{ $product['description'] }} </p>
    </div>

        @include('embed.errors')

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">{{ $product['title'] }}</h1>
        </div>
    </div>

@endsection