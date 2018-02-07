<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function create()
    {
    	$cart = Cart::getCartArray();
    	if(count($cart)<1){
    		return redirect('/products');
	    }
	    $products =Cart::getCartProducts($cart);
    	return view('orders.create',compact('products','cart'));
    }

    public function store()
    {
	    $cart = Cart::getCartArray();
	    if(count($cart)<1){
		    return redirect('/products');
	    }

	    $this->validate(request(),[
		    'user_name' => 'required|min:3',
		    'email' => 'required|email',
		    'phone' => 'required|min:5',
	    ]);

	    $order = Order::create(request(['user_name','email','phone']));

	    foreach ($cart as $productID => $productAr){
	    	$order->products()->attach($productID,['amount' =>$productAr['amount']]);
	    }

	    return redirect('/products')->withCookie('cart',json_encode([]));
    }

}
