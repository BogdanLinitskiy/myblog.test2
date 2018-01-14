<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function show($id){
		$data['post'] = Post::find($id);
		return view('posts.show',$data);
	}

	public function create(){
		return view('posts.create');
	}

	public function store(){
		//validate

		//save

//		dd(request(['title','intro']));
//		dd(request()->all());
		$post = new Post;
		$post->title = request('title');
		$post->intro = request('intro');
		$post->body = request('body');
		$post->save();
		//redirect to home page

		return redirect('/');
	}
}
