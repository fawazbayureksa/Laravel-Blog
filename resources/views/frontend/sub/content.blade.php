
@extends('frontend.fe_template')

@section('content')

<div class="col-md-8">
	<div class="card rounded-2 shadow-md h-5">
		<div class="card-body">
			
			<h3>{{$post->title}}</h3>
			<p>
				{!!$post->body!!}
			</p>
		</div>
	</div>
<!-- </div> -->
@endsection