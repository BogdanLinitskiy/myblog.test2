<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index()
	{
		$cart = Cart::getCartArray();
		if(count($cart)<1){
			return redirect('/products');
		}
		$products = Cart::getCartProducts($cart);
		return view('cart.index',compact('cart','products'));
	}

    public function store(Product $product)
    {
    	$cart = Cart::addProduct($product);
	    return back()->withCookie('cart',json_encode($cart));
    }

    public function remove(Product $product)
    {
    	$cart = Cart::removeProduct($product);
    	return back()->withCookie('cart',json_encode($cart));
    }

    public function destroy(Product $product)
    {
	    $cart = Cart::destroyProduct($product);
	    return back()->withCookie('cart',json_encode($cart));
    }

}
