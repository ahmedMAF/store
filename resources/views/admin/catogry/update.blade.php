@extends('layout/index')
@section('content')
<div class="tableCustem mt-5">
    <form action="/updateCatogry" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$catogry->id}}">
        <input class="form-control" type="text" name="name" placeholder="Name" value="{{$catogry->name}}">
        <br>
        <input type="submit" class="btn btn-success my-4" value="Save">
    </form>
</div>
@endsection
