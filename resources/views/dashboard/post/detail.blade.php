
@extends('template')


@section('title','REXXCODE - Dashboard Artikel')


@section('content')

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
				</div>
			</div>
		</div>
	</div>


@endsection