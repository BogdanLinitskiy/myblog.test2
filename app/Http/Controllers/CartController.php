<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Product $product)
    {
    	$cart = [];

    	if(request()->cookie('cart')){
    		$cart = json_decode(request()->cookie('cart'),true);
	    }

	    if(isset($cart[$product->id])){
    		$cart[$product->id]++;
	    }else{
	    	$cart[$product->id] = 1;
	    }

	    return back()->withCookie('cart',json_encode($cart));
    }
}
