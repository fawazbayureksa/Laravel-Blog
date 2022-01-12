


@extends('frontend.fe_template')

@section('title','REXXCODE - Share Anything You Know');

@section('content')
@include('components._jumbotron')
<div class="container">
	<div class="row justify-content-start">
		@foreach($posts as $post)
			<div class="col-md-4">
				<div class="card rounded-2 shadow-md h-5 mb-3">
					<div class="card-body">
					<!-- 	<div class="text-center">
							<img src="{{Storage::url('public/blogs/').$post->image}}" class="rounded" width="300">
						</div> -->
						<h3>{{$post->title}}</h3>
						<p>Author : <a href="#" class="text-decoration-none">{{$post->user->name}}</a> in <a href="#" class="text-decoration-none">{{$post->category->name}}</a> </p>
						{{$post->excerpt}}
						<a href="/article/{{$post->slug}}" class="text-decoration-none"><i>Read more</i></a>	
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection