@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">
<form action="{{ route('category/update',$category->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="category">Enter Category Name :</label>
    <input type="text" name="category" id="category" class="form-control w-50" value="{{ $category->category }}"><br>
    <input type="hidden" name="id" id="id" class="form-control w-50" value="{{ $category->id }}">

    <input type="submit" class="btn btn-primary">
</form>
</div>

@endsection