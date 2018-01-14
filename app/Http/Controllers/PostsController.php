<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts(){
       $posts = Post::all();
       dd($posts);
//       return view('main');
    }
}
