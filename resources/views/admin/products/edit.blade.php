@extends('layout/index')
@section('content')
<div class="tableCustem mt-5">
    <form action="/updateProduct" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <input class="form-control" type="text" name="name" placeholder="Name" value="{{$product->name}}">
        <br>
        <textarea class="form-control" name="detail"  placeholder="Detail" id="" cols="30" rows="10" >{{$product->details}}</textarea>
        <br>
        <input class="form-control" type="number" name="price" placeholder="Price" value="{{$product->price}}">
        <br>
        <div class="form-floating">
            <select name="catogry" class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected value="{{$product->category->id}}">{{$product->category->name}}</option>
              @foreach ($catogries as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
            <label for="floatingSelect">Select Category</label>
          </div>
        <input type="submit" class="btn btn-success my-4" value="Save">
    </form>
</div>
@endsection
