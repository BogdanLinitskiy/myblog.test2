<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post){

    	$this->validate(request(),[
    		'comment_body' =>'required|min:4|max:145'
	    ]);

    	Comment::create(
    		[
    			'body' => request('comment_body'),
			    'post_id' => $post->id
		    ]);
	    return back();
    }
}
