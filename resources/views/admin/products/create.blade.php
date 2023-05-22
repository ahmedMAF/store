@extends('layout/index')
@section('content')
<div>
    <form class="form-inline my-5 mx-auto text-center" method="GET">
        <button type="submit" class="btn btn-success mr-2 mx-2" formaction="/products">Products</button>
        <button type="submit" class="btn btn-success mx-2" formaction="/createProduct">Create</button>
      </form>
    </div>
</div>
<div class="tableCustem">
    <form action="/createProduct" method="POST">
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Name">
        <br>
        <textarea class="form-control" name="detail"  placeholder="Detail" id="" cols="30" rows="10"></textarea>
        <br>
        <input class="form-control" type="number" name="price" placeholder="Price">
        <br>
        <div class="form-floating">
            <select name="catogry" class="form-select" id="floatingSelect" aria-label="Floating label select example">
              @foreach ($catogries as $catogry)
              <option value="{{$catogry->id}}">{{$catogry->name}}</option>
              @endforeach
            </select>
            <label for="floatingSelect">Select Category</label>
          </div>
        <input type="submit" class="btn btn-success my-4" value="Add Product">
    </form>
</div>
@endsection
