@extends('layout/index')
@section('content')
<div>
    <form class="form-inline my-5 mx-auto text-center" method="GET">
        <button type="submit" class="btn btn-success mr-2 mx-2" formaction="/catogry">Catogries</button>
        <button type="submit" class="btn btn-success mx-2" formaction="/createCatogry">Create</button>
      </form>
    </div>
</div>
<div>
    <table class="table table-striped tableCustem">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($catogries as $catogry)
                <tr>
                <td>{{$catogry->id}}</td>
                <td>{{$catogry->name}}</td>
                <td>{{$catogry->created_at}}</td>
                <td>{{$catogry->updated_at}}</td>
                <td>
                <a href="deleteCatogry/{{$catogry->id}}" class="btn btn-danger delete-btn">Delete</a>
                <a href="updateCatogry{{$catogry->id}}" class="btn btn-primary update-btn">Update</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection
