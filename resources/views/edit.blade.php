@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">
<form action="{{ route('dashboard.update',$user->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="username">Enter Username :</label>
    <input type="text" name="username" id="username" class="form-control w-50" value="{{ $user->name }}"><br>

    <label for="email">Enter Email :</label>
    <input type="email" name="email" id="email" class="form-control w-50" value="{{ $user->email }}" ><br>

    <input type="hidden" name="id" id="id" class="form-control w-50" value="{{ $user->id }}">

    <input type="submit" class="btn btn-primary">
</form>
</div>

@endsection