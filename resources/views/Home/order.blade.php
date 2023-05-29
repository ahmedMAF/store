@extends('layout\front')
@section('contant')
<form action="/order" method="POST" class="mt-5" style="width: 700px; margin: auto;">
    @csrf
    <input class="form-control" type="text" name="address" placeholder="Your address">
    <br>
    <input class="form-control" type="number" name="quantity" placeholder="Quantity">
    <br>
    <input type="hidden" name="idProduct" value="{{$id}}">
    <input type="submit" class="btn btn-success my-4" value="Order">
</form>
  <hr class="featurette-divider">
@endsection
