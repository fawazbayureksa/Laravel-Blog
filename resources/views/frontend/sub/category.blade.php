
<style type="text/css">
	.card .card-title{
		background-color: rgba(0, 0, 0, 0.4);
	}
</style>

@extends('frontend.fe_template')

@section('title','REXXCODE - Share Anything You Know');

@section('content')
<!-- @include('components._jumbotron') -->
<div class="container">
	<div class="row justify-content-start py-5">
		@foreach($categories as $cat)
			<div class="col-md-4">
				<a href="/categories/{{$cat->slug}}">
				<div class="card bg-dark text-white">
				  <img src="https://source.unsplash.com/720x720/?{{$cat->name}}" class="card-img" alt="">
				  <div class="card-img-overlay d-flex align-items-center p-0">
				    <h5 class="card-title flex-fill fs-3 text-center p-3"> {{$cat->name}}</h5>
				  </div>
				</div>
				</a>
			</div>
		@endforeach
	</div>
</div>
@endsection