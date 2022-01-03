@extends('frontend.fe_template')

@section('content')

@foreach($blogs as $blog)
<div class="col-md-4">
	<div class="card rounded-2 shadow-md h-5">
		<div class="card-body">
			<div class="text-center">
				<img src="{{Storage::url('public/blogs/').$blog->image}}" class="rounded" width="300">
			</div>
			<h3>{{$blog->title}}</h3>
			{{$blog->content}}
		</div>
	</div>
</div>
@endforeach
@endsection