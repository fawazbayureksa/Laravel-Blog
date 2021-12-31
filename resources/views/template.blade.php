<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">
	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">REXX CODE</a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a href="#" class="nav-link active" aria-current="page">Blog</a>					
					<a href="#" class="nav-link" aria-current="page">About</a>					
					<a href="#" class="nav-link" aria-current="page">Contact</a>					
				</div>
			</div>
		</div>
	</nav>

<!-- 	@section('content')

	@endsection -->
		<h1>Hello World</h1>

	<script src="{{asset('style/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="">
		@if(session()->has('success'))
			toaster.success('{{session('success')}}','BERHASIL!');
		@elseif(session()->has('error'))
			toaster.error('{{session('error')}}','GAGAL'); 
		@endif
	</script>
</body>
</html>