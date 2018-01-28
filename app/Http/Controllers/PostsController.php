<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except('show');
	}

	public function show(Post $post){
		return view('posts.show',compact('post'));
	}

	public function create(){
		return view('posts.create');
	}

	public function store(){
		//validate
		$this->validate(request(),[
			'title' => 'required|min:4|unique:posts,title',
			'slug' => 'required|min:2|max:20|unique:posts,slug',
			'intro' => 'required|min:10|max:50',
			'body' => 'required|min:20|'
		]);
		//save

//		dd(request(['title','intro']));
//		dd(request()->all());

		Post::create(request(['title','slug','intro','body']));

//		Post::create(request()->all());

//		$post = new Post;
//		$post->title = request('title');
//		$post->intro = request('intro');
//		$post->body = request('body');
//		$post->save();

		//redirect to home page
		return redirect('/');
	}

	public function edit(Post $post){
//				$post = Post::find($id);
		return view('posts.edit',compact('post'));
	}
	public function update(Post $post){
		$this->validate(request(),[
			'title' => 'required|min:4|unique:posts,title,' . $post->id,
			'slug' => 'required|min:2|max:20|unique:posts,slug,' . $post->id,
			'intro' => 'required|min:10|max:50',
			'body' => 'required|min:20|'
		]);

		$post->update(request(['title','slug','intro','body']));

//		$post->title = request('title');
//		$post->intro = request('intro');
//		$post->body = request('body');
//		$post->save();

		return redirect('/');
	}

	public function delete(Post $post){
//				$post = Post::find($id);
		return view('posts.delete',compact('post'));
	}

	public function destroy(Post $post){
		$post->delete();
		return redirect('/');
	}
}
