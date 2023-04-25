@extends('layouts.master')

@section('content')

<div class="container mt-5 mb-5"> 
    <form action="{{ route('image/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Enter Image Name :</label>
        <input type="file" name="image" id="image" class="form-control w-50"><br>
    
        <input type="submit" class="btn btn-primary">
    </form>
</div>
@endsection
