@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">    
    <a href="{{ route('image/create') }}"><button class="btn btn-warning">ADD IMAGE</button></a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @if(count($data) > 0)
        
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td><img src="images/{{ $row->image }}" alt="image" height="100px" width="100px"></td>
                    {{-- <td>{{ $row->image }}</td> --}}
                    <td>
                        <form method="post" action="{{ route('image/destroy', $row->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('image/edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
