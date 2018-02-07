@extends('template')

@section('content')

    <div class="col-md-12">
        <h2>Selected products:</h2>
        <table class="table">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Total price</th>
                <th></th>
            </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="/cart/{{$product->slug}}/remove" class="btn btn-warning">-</a>
                    {{$cart[$product->id]['amount']}}
                    <a href="/cart/{{$product->slug}}" class="btn btn-success">+</a>
                </td>
                <td>{{$cart[$product->id]['totalPrice']}}</td>
                <td>
                    <a href="/cart/{{$product->slug}}/destroy" class="btn btn-danger">X</a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>

@endsection

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Orders</h1>
        </div>
    </div>
@endsection