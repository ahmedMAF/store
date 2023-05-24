@extends('layout\front')
@section('contant')
<div class="container mt-4">
    <h1>Product Details</h1>
    <div class="product">
      <div class="my-3">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
      <h2 id="product-name">Name: {{$product->name}}</h2>
      <p id="product-description">Description :{{$product->details}}</p>
      <p id="product-price">Price: {{$product->price}}$</p>
      <a class = "btn-success btn" href="order{{$product->id}}">Order</a>
    </div>
  </div>
  <hr class="featurette-divider">
@endsection
