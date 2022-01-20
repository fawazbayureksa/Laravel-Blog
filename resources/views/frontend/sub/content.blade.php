
@extends('frontend.fe_template')
@section('title','REXXCODE')
@section('content')
<div class="container-fluid mt-5">
	<div class="row justify-content-start">
		<div class="col-md-8">
			<div class="card rounded-2 shadow-md h-5">
				<div class="card-body">
					
					<h3>{{$post->title}}</h3>
					<p>Author : <a href="/?author=" class="text-decoration-none">{{$post->author->name}}</a>  in <a class="text-decoration-none" href="/?category={{$post->category->slug}}" >{{$post->category->name}}</a> </p>
					<img src="https://source.unsplash.com/1080x720/?{{$post->category->name}}" class="card-img-top py-3" alt="">
					<p>
						{!!$post->body!!}
					</p>
					<a href="/" class="text-decoration-none">Kembali</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card rounded-2 shadow-md">
				<div class="card-body">
					<div class="list-group">
					    <a href="#" class="list-group-item list-group-item-action">Article</a>
					    <a href="#" class="list-group-item list-group-item-action">Blog</a>
					    <a href="#" class="list-group-item list-group-item-action">Code</a>
					    <a href="#" class="list-group-item list-group-item-action">Error</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection