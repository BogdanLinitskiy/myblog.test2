<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public static function getCartArray()
    {
    	$cart =[];
	    $cart = json_decode(request()->cookie('cart'),true);
	    return $cart;
    }

    public static function addProduct(Product $product)
    {
    	$cart = self::getCartArray();
    	if(isset($cart[$product->id])){
    		$cart[$product->id]['amount']++;
    		$cart[$product->id]['totalPrice'] =
			    round($product->price * $cart[$product->id]['amount'],2);
	    }else{
    		$cart[$product->id] = [
    			'amount' =>1,
			    'totalPrice' => $product->price
		    ];
	    }
	    return $cart;
    }

	public static function removeProduct(Product $product)
	{
		$cart = self::getCartArray();
		if(isset($cart[$product->id])){
			if($cart[$product->id]['amount'] == 1){
				unset($cart[$product->id]);
			}else{
				$cart[$product->id]['amount']--;
				$cart[$product->id]['totalPrice'] =
					round($product->price * $cart[$product->id]['amount'],2);
			}
		}
		return $cart;
    }

    public static function destroyProduct(Product $product)
    {
	    $cart = self::getCartArray();
	    if(isset($cart[$product->id])){
			    unset($cart[$product->id]);
	    }
	    return $cart;
    }

    public static function getCartProducts($cart)
    {
    	$products =[];
    	foreach ($cart as $productID => $productAmount){
    		$products[] = Product::find($productID);
	    }
	    return $products;
    }

}
