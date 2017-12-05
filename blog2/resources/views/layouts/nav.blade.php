<div class="blog-masthead">
  <div class="container">
  	<nav class="nav">
    	<a class="nav-link active" href="/">Home</a>
    	@if (Auth::check())
    		<a href="/posts/create" class="nav-link">New Post</a>
    		<a href="/users/{{Auth::user()->id}}" class="nav-link ml-auto">{{ Auth::user()->name }}</a>
    		<a href="/logout" class="nav-link">Logout</a>

    	@else
    		<a href="/register" class="nav-link">New Post</a>
    		<a href="/login" class="nav-link ml-auto">Login</a>
    		<a href="/register" class="nav-link">Register</a>
    	@endif
  	</nav>
  </div>
</div>