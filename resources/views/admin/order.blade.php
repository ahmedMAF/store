@extends('layout/index')
@section('content')

<div>
    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th>Id</th>
            <th>User_id</th>
            <th>Product_id</th>
            <th>Quantity</th>
            <th>Address</th>
            <th>Created_at</th>
            <th>Updated_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->product_id}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
