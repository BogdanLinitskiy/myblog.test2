@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $post['title'] }}</h2>
        <p> {{ $post['intro'] }} </p>
        <p> {{ $post['body'] }} </p>
    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">{{ $post['title'] }}</h1>
        </div>
    </div>

@endsection