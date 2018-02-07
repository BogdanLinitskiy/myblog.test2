@extends('template')

@section('content')

    <div class="col-md-12">
        @if($message = session('message'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @endif
        <table class="table">
            <tr>
                <th>id</th>
                <th>User name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Products</th>
                <th>Total price</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order['id']}}</td>
                    <td>{{ $order['user_name'] }}</td>
                    <td> {{ $order['email'] }} </td>
                    <td> {{$order['phone']}} </td>
                    <td>
                        <ul>
                            @foreach($order->products as $product)
                                <li>{{  $product['title']}} x {{$product->pivot->amount }}</li>
                                <form action="/order/{{$order->id}}/{{$product->slug}}"  method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger">X</button>
                                </form>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                        @foreach($order->products as $product)
                            <li>
                                {{$product->pivot->amount * $product->price}}$
                            </li>
                        @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

@endsection

@section('jumbotron')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Admin panel</h1>
            <p> Here comes some orders</p>
        </div>
    </div>

@endsection