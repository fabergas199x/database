<div>
	<h2 class="blog-post-title">
		<a href="/posts/{{ $post->id }}">
			{{ $post->title }}
		</a>
	</h2>

	<p class="blog-post-meta">
		Post by
		<a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a> 
		on
		{{ $post->created_at->toFormattedDateString() }}
	</p>

	{{ $post->body }}
	<hr>
</div>