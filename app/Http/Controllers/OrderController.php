<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function create()
    {
    	$cart = json_decode(request()->cookie('cart'),true);
    	if(count($cart)<1){
    		return redirect('/products');
	    }
	    $products =[];
    	foreach ($cart as $productID =>$amount){
    		$products[] = Product::find($productID);
	    }
    	return view('orders.create',compact('products','cart'));
    }

    public function store()
    {
	    $cart = json_decode(request()->cookie('cart'),true);
	    if(count($cart)<1){
		    return redirect('/products');
	    }

	    $this->validate(request(),[
		    'user_name' => 'required|min:3',
		    'email' => 'required|email',
		    'phone' => 'required|min:5',
	    ]);

	    $order = Order::create(request(['user_name','email','phone']));

	    foreach ($cart as $productID => $productAmount){
	    	$order->products()->attach($productID,['amount' =>$productAmount]);
	    }

	    return redirect('/products')->withCookie('cart',json_encode([]));
    }
}
