@extends('layouts.master')

@section('content')
	<div class="col-md-8">
		<h1>Edit</h1>

		<form action="/login" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-controll" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-controll" id="password" name="password">
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign in</button>
			</div>

			@include('layouts.errors')

		</form>
	</div>
@endsection