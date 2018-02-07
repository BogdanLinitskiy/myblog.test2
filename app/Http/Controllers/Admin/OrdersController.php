<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function destroyProduct(Order $order,Product $product)
    {
    	$order->products()->detach($product->id);
    	session()->flash('message',"Product $product->title has been removed");
    	return back();
    }
}
