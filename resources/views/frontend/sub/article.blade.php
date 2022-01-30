@extends('frontend.fe_template')

@section('title','REXXCODE - Share Anything You Know');

@section('content')
@include('components._jumbotron')

@if($posts->count())

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="text py-3">
				<div class="fs-2 container">
					{{$title}}
				</div>
			</div>
		</div>
		<div class="col-md-5 mt-4">
			<form action="/" method="get">
				<!-- jika saat mencari ada category=.. buat input type hiden , untuk menyisipkan search saat berada di halaman category-->
				@if(request('category'))
					<input type="hidden" name="category" value="{{request('category')}}">
				@endif	
				@if(request('author'))
					<input type="hidden" name="author" value="{{request('author')}}">
				@endif


				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
				  <button class="btn btn-primary btn-md" type="submit">Search</button>
				</div>
			</form>
		</div>
	</div>



	<div class="row justify-content-start">	
		<div class="card mb-3">
			<!-- <div class="position-absolute px-3 py-2 bg-warning"><a class="text-decoration-none text-white" href="/categories/{{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a></div>
 -->
			<img src="https://source.unsplash.com/1440x480/?{{$posts[0]->category->name}}" class="card-img-top pt-3" alt="">
			<div class="card-body text-center">
				<h3 class="card-title">{{$posts[0]->title}}</h3>
				<p>Author : 
					<a href="/?author={{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> 
					in 
					<a class="text-decoration-none" href="/?category={{$posts[0]->category->slug}}" >{{$posts[0]->category->name}}</a>
					<small class="text-muted">{{$posts[0]->created_at->diffForHumans()}}</small> 
				</p>
				<p class="card-text">{{$posts[0]->excerpt}}</p>

				<a href="/article/{{$posts[0]->slug}}" class="btn btn-primary "><i>Read more</i></a>	
			</div>
		</div>

		
		<!-- fungsi method skip(1) digunakan untuk menlwatkan postingan pertama atau posts[0] -->
			@foreach($posts->skip(1) as $post)
				<div class="col-md-4">
					<div class="card rounded-2 shadow-md mb-3">
						<div class="card-body">
							<div class="position-absolute px-3 py-2 bg-dark"><a class="text-decoration-none text-white" href="/?category={{$post->category->slug}}">{{$post->category->name}}</a></div>
							<img src="https://source.unsplash.com/1080x720/?{{$post->category->name}}" class="card-img-top" >
							<!-- <div class="text-center">
								<img src="{{Storage::url('public/blogs/').$post->image}}" class="rounded" width="300">
							</div> -->
							<h3>{{$post->title}}</h3>
							<p>Author : <a href="/?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <small class="text-muted">{{$posts[0]->created_at->diffForHumans()}}</small> </p>
							{{$post->excerpt}}
							<a href="/article/{{$post->slug}}" class="text-decoration-none"><i>Read more</i></a>	
						</div>
					</div>
				</div>
			@endforeach
		@else
			<p class="fs-4 text-center">Content Not Found</p>
		@endif

		<!-- <href="/">Semua Postingan</a> -->

	</div>
	<div class="d-flex justify-content-end">
		{{$posts->links()}}
	</div>
</div>
@endsection