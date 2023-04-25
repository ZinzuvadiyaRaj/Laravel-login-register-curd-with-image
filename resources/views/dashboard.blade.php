@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">
    @if($message = Session::get('success'))

    <div class="alert alert-success">
        {{ $message }}
    </div>
    
    @endif



<table class="table table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    @if(count($data) > 0)

        @foreach($data as $row)

            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->password }}</td>
                <td>
                    <form method="post" action="{{ route('dashboard.destroy', $row->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('dashboard.show', $row->id) }}" class="btn btn-dark btn-sm">View</a>
                        <a href="{{ route('dashboard.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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