
@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">
    
    <div class="card">
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Username</b></label>
			<div class="col-sm-10">
                {{ $user->name }}
            </div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Email</b></label>
			<div class="col-sm-10">
                {{ $user->email }}
			</div>
		</div>
        <div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Password</b></label>
			<div class="col-sm-10">
                {{ $user->password }}
			</div>
		</div>
	</div>
</div>
</div>
@endsection