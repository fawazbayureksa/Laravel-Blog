
@extends('frontend.fe_template')

@section('content')
@include('components._jumbotron')
@foreach($posts as $post)
<div class="col-md-8">
	<div class="card rounded-2 shadow-md h-5">
		<div class="card-body">
		<!-- 	<div class="text-center">
				<img src="{{Storage::url('public/blogs/').$post->image}}" class="rounded" width="300">
			</div> -->
			<h3>{{$post->title}}</h3>
			{{$post->excerpt}}
			<a href="/article/{{$post->slug}}"><i>Read more</i></a>	
		</div>
	</div>
</div>
@endforeach
@endsection