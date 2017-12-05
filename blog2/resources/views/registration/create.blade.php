@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h1>Register</h1>

		<form method="POST"	action="/register">
			{{ csrf_field() }}

			<div class="form-group">
				
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" required>

			</div>

			<div class="form-group">
				
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>

			</div>

			<div class="form-group">
				
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>

			</div>

			<div class="form-group">
				
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

			</div>

			<div class="form-group">
				<label for="gender">Gender:</label> <br>
				<input checked="checked" name="gender" type="radio" value="male" id="gender">Male &nbsp
				<input name="gender" type="radio" value="female" id="gender">Female &nbsp
				<input name="gender" type="radio" value="other" id="gender">Other
			</div>

			<div class="form-group">
				
				<label for="phone">Telephone Number:</label>
				<input type="text" class="form-control" id="phone" name="phone" required>

			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>

				@include('layouts.errors')

		</form>
	</div>
@endsection