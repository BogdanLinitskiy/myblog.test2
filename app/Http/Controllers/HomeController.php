<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts= Post::all();
        return view('main')->with(compact('posts'));

//        return view('main')->with($data);
    }
}
