<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
    {
    	$orders = Order::all();
    	return view('admin.main.index',compact('orders'));
    }
}
