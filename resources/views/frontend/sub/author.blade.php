
@extends('frontend.fe_template')

@section('title','REXXCODE - Share Anything You Know');

@section('content')
<!-- @include('components._jumbotron') -->
<div class="container">
	<h3 class="mb-5 mt-4">Category by Author </h3>
	<div class="row justify-content-start">
		@foreach($posts as $post)
			<div class="col-md-4">
				<div class="card rounded-2 shadow-md h-5 mb-3">
					<div class="card-body">
					<!-- 	<div class="text-center">
							<img src="{{Storage::url('public/blogs/').$post->image}}" class="rounded" width="300">
						</div> -->
						<h3>{{$post->title}}</h3>
						<p>Author : 
						<a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in 
						<a href="/categories/{{$post->category->slug}}" class="text-decoration-none"
						></a></a>
						{{$post->excerpt}}
						<a href="/article/{{$post->slug}}"><i>Read more</i></a>	
					</div>
				</div>
			</div>
		@endforeach
		<a href="/" class="">Kembali</a>
	</div>
</div>
@endsection