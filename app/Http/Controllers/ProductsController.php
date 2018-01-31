<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
    	$products = Product::all();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
	    $this->validate(request(),[
		    'title' => 'required|min:4|unique:products,title',
		    'slug' => 'required|min:2|max:20|unique:products,slug',
		    'price' => 'required|min:1',
		    'description' => 'required|min:20|'
	    ]);
	    Product::create(request(['title','slug','price','description']));
	    return redirect('/products');
    }

    public function show(Product $product)
    {
	    return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
	    return view('products.edit',compact('product'));
    }

    public function update(Product $product)
    {
	    $this->validate(request(),[
		    'title' => 'required|min:4|unique:products,title,' . $product->id,
		    'slug' => 'required|min:2|max:20|unique:products,slug,' . $product->id,
		    'price' => 'required|min:1',
		    'description' => 'required|min:20'
	    ]);

	    $product->update(request()->all());

	    return redirect('/products');
    }

    public function destroy(Product $product)
    {
	    $product->delete();
	    return back();
    }

}
