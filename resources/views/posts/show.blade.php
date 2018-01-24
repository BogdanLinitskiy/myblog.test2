@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>{{ $post['title'] }}</h2>
        <p> {{ $post['intro'] }} </p>
        <p> {{ $post['body'] }} </p>
    </div>

    <div class ="col-md-12">
        <ul class="list-group">
            @foreach($post->comments as $comment)
            <li class="list-group-item">{{$comment->body}}</li>
                @endforeach
        </ul>
        @include('embed.errors')
        <form action="/posts/{{$post->slug}}/comments" class="form-horizontal" method="POST">
            {{csrf_field()}}
            <label for="comment">Write your comment:</label><br>
            <textarea name="comment_body" id="comment" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">{{ $post['title'] }}</h1>
        </div>
    </div>

@endsection