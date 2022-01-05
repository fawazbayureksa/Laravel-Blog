@extends('frontend.fe_template')
@section('content')
<div class="container-fluid mt-5">
	<div class="row justify-content-start">
		<div class="col-md-8">
			<div class="card rounded-2 shadow-md h-5">
				<div class="card-body">
					
					<h3>{{$post->title}}</h3>
					<p>
						{!!$post->body!!}
					</p>
					<a href="/">Kembali</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card rounded-2 shadow-md">
				<div class="card-body">
					<div class="list-group">
					    <a href="#" class="list-group-item list-group-item-action">Article</a>
					    <a href="{{route('blog.index')}}" class="list-group-item list-group-item-action">Blog</a>
					    <a href="#" class="list-group-item list-group-item-action">Code</a>
					    <a href="#" class="list-group-item list-group-item-action">Error</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection