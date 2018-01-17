@extends('template')

@section('content')

    @foreach($posts as $post)

        <div class="col-md-4">
            <h2>{{ $post['title'] }}</h2>
            <p> {{ $post['intro'] }} </p>
            <p><a class="btn btn-primary" href="/posts/{{ $post['id'] }}" role="button">View details »</a></p>
            <p><a class="btn btn-success" href="/posts/{{ $post['id'] }}/edit" role="button">Edit »</a></p>
            <p><a class="btn btn-danger" href="/posts/{{ $post['id'] }}/delete" role="button">Delete »</a></p>
        </div>

    @endforeach

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Welcome to Hillel Blog</h1>
            <p> Blog about PHP and Laravel </p>
        </div>
    </div>

@endsection