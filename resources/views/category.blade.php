@extends('layouts.master')

@section('content')
    <div class="container mt-5 mb-5">
        @if($message = Session::get('success'))

        <div class="alert alert-success">
            {{ $message }}
        </div>
        
        @endif

    <a href="{{ route('category/create') }}"><button class="btn btn-warning">ADD CATEGORY</button></a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @if(count($data) > 0)
        
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->category }}</td>
                    <td>
                        <form method="post" action="{{ route('category/destroy', $row->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('category/edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                        </form>
                    </td>
                </tr>
                
            @endforeach

        @else
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
        @endif
    </table>

    </div>

@endsection