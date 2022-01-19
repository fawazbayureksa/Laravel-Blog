@extends('frontend.fe_template')

@section('title','REXXCODE - Share Anything You Know');

@section('content')
@include('components._jumbotron')
<div class="container">
	<div class="text py-3">
		<div class="display-6 container">
			{{$title}}
		</div>
	</div>
	<div class="row justify-content-start">	

		<div class="card mb-3">
			<img src="..." class="card-img-top" alt="">
			<div class="card-body">
				<h3 class="card-title">{{$posts[0]->title}}</h3>
				<p>Author : <a href="/authors/{{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a> </p>
				<p class="card-text">{{$posts[0]->excerpt}}</p>

				<p class="card-text"><small class="text-muted">{{$posts[0]->created_at->diffForHumans()}}</small></p>
			</div>
		</div>

		@if($posts->count())
			@foreach($posts as $post)
				<div class="col-md-4">
					<div class="card rounded-2 shadow-md h-5 mb-3">
						<div class="card-body">
							<!-- <div class="text-center">
								<img src="{{Storage::url('public/blogs/').$post->image}}" class="rounded" width="300">
							</div> -->
							<h3>{{$post->title}}</h3>
							<p>Author : <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a> </p>
							{{$post->excerpt}}
							<a href="/article/{{$post->slug}}" class="text-decoration-none"><i>Read more</i></a>	
						</div>
					</div>
				</div>
			@endforeach
		@else
			<p class="fs-4 text-center">Content Not Found</p>
		@endif

		<a href="/">Semua Postingan</a>
	</div>
</div>
@endsection