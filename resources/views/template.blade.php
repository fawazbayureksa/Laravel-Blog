<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">
	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	 <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
</head>
<body>

	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
		<div class="container">
			<a href="#" class="navbar-brand">REXXCODE</a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
				<ul class="navbar-nav ms-auto">

				    <li class="nav-item">
						<a href="#" class="nav-link active" aria-current="page">Blog</a>					
				    </li class="nav-item">
				    <li>
						<a href="#" class="nav-link" aria-current="page">About</a>					
				    </li>
				    <li class="nav-item">
						<a href="#" class="nav-link" aria-current="page">Contact</a>					
				    </li>
				   <!--  <li class="nav-item">
				    	<a href="" class="nav-link">Fawwaz Bayureksa</a>
				    </li> -->
				</ul>
			</div>
		</div>
	</nav>

	<section class="isi">
		<div class="row mx-auto">
			<div class="col-md-3">
				@include('_sidebar')
			</div>
				<div class="col-md-9">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	<!-- <div class="container mt-3">
		
		<h1>Hello World</h1>
	</div> -->
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{asset('style/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script>
	    CKEDITOR.replace('content' );
	</script>
	<script src="">
		@if(session()->has('success'))
			toaster.success('{{session('success')}}','BERHASIL!');
		@elseif(session()->has('error'))
			toaster.error('{{session('error')}}','GAGAL'); 
		@endif
	</script>
</body>
</html>