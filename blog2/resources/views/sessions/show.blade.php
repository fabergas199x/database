@extends('layouts.master')

@section('content')
	@if ($user->email == Auth::user()->email)
		<div class="col-sm-8 blog-main">
			<h1>{{ $user->name }}</h1>
			<hr>
				<div>
					Email: {{ $user->email }}
				</div>
				
				<div>
					Telephone Number : {{ $user->phone }}
				</div>
				<div>
					Total post: {{ count($user->posts) }}
				</div>
			<hr>

			<div class="posts">
				<ul class="list-group">
					@foreach ($user->posts as $post)
						<li class="list-group-item">
								<div><a href="/posts/{{$post->id}}"><strong> {{ $post->title }}</strong></a></div>
								{{ $post->created_at->diffForHumans() }}
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	@else
		<div class="col-sm-8 blog-main">
			<h1>{{ $user->name }}</h1>
			<hr>
				<div>
					Email: {{ $user->email }}
				</div>
				<div>
					Telephone Number : {{ $user->phone }}
				</div>
				<div>
					Total post: {{ count($user->posts) }}
				</div>
			<hr>

			<div class="posts">
				<ul class="list-group">
					@foreach ($user->posts as $post)
						<li class="list-group-item">
								<div><a href="/posts/{{$post->id}}"><strong> {{ $post->title }}</strong></a></div>
								{{ $post->created_at->diffForHumans() }}
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif
@endsection