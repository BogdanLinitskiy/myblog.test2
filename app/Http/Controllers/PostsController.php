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
		$this->validate(request(),[
			'title' => 'required|min:4|unique:posts,title',
			'intro' => 'required|min:10|max:50',
			'body' => 'required|min:20|'
		]);
		//save

//		dd(request(['title','intro']));
//		dd(request()->all());

		Post::create(request(['title','intro','body']));

//		Post::create(request()->all());

//		$post = new Post;
//		$post->title = request('title');
//		$post->intro = request('intro');
//		$post->body = request('body');
//		$post->save();

		//redirect to home page
		return redirect('/');
	}

	public function edit($id){
		$data['post'] = Post::find($id);
		return view('posts.edit',$data);
	}
	public function update($id){
		$this->validate(request(),[
			'title' => 'required|min:4',
			'intro' => 'required|min:10|max:50',
			'body' => 'required|min:20|'
		]);

		$post =Post::find($id);
		$post->update(request(['title','intro','body']));

//		$post->title = request('title');
//		$post->intro = request('intro');
//		$post->body = request('body');
//		$post->save();

		return redirect('/');
	}

	public function delete($id){
		$data['post'] = Post::find($id);
		return view('posts.delete',$data);
	}

	public function destroy($id){
		$post = Post::find($id);
		$post->delete($id);
		return redirect('/');
	}
}
