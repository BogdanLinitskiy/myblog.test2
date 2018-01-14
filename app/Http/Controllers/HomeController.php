<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $data['posts'] = Post::all();
        return view('main', $data);

//        return view('main')->with($data);
    }
}
