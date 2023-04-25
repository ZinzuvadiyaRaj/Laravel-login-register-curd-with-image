@extends('layouts.master')

@section('content')

<div class="container mt-5 mb-5">
    <form action="{{ route('category/test') }}" method="post">
        @csrf
        <label for="category">Enter Category Name :</label>
        <input type="text" name="category" id="category" class="form-control w-50"><br>
    
        <input type="submit" class="btn btn-primary">
    </form>
    </div>

@endsection