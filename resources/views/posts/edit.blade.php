@extends('template')

@section('content')

    <div class="col-md-12">

        <form action="/posts/{{$post->slug}}" method="post" class="form-horizontal">

            @include('embed.errors')

            {{csrf_field()}}

            {{method_field('PATCH')}}
            <div class="form-group">

                <label for="title" >Title: </label>
                <input  type ="text" class="form-control" id="title" name="title" value="{{$post['title']}}">

            </div>

            <div class="form-group">

                <label for="slug" >Title: </label>
                <input  type ="text" class="form-control" id="slug" name="slug" value="{{$post['slug']}}">

            </div>

            <div class="form-group">

                <label for="intro" >Intro: </label>
                <textarea  name="intro" id="intro" class="form-control">{{$post['intro']}}</textarea>

            </div>

            <div class="form-group">

                <label for="body" >Body: </label>
                <textarea name="body" id="body" class="form-control">{{$post['body']}}</textarea>

            </div>

            <div class="form-group">
                <button class="btn btn-default">Update</button>
            </div>

        </form>
    </div>

@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Create new blog post</h1>
        </div>
    </div>

@endsection