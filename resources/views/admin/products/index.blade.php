@extends('layout/index')
@section('content')
<div>
    <form class="form-inline my-5 mx-auto text-center" method="GET">
        <button type="submit" class="btn btn-success mr-2 mx-2" formaction="/products">Products</button>
        <button type="submit" class="btn btn-success mx-2" formaction="/createProduct">Create</button>
      </form>
    </div>
</div>
<div>
    <table class="table table-striped tableCustem">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category_id}}</td>
                <td>
                <a href="deleteProduct/{{$product->id}}" class="btn btn-danger delete-btn">Delete</a>
                <a href="updateProduct{{$product->id}}" class="btn btn-primary update-btn">Update</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection
