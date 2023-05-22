@extends('layout/index')
@section('content')
<div>
    <form class="form-inline my-5 mx-auto text-center" method="GET">
        <button type="submit" class="btn btn-success mr-2 mx-2" formaction="/catogry">Catogries</button>
        <button type="submit" class="btn btn-success mx-2" formaction="/createCatogry">Create</button>
      </form>
    </div>
</div>
<div class="tableCustem">
    <form action="/createCatogry" method="POST">
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Name">
        <br>
        <input type="submit" class="btn btn-success my-4" value="Add Catogry">
    </form>
</div>
@endsection
