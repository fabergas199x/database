@extends ('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    @foreach ($posts as $post)
      @include('posts.post')
    @endforeach

  </div>
	{!! $posts->appends(request()->input())->links() !!}
@endsection