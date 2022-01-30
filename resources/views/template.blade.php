<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/solid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('style/dashboard.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
</head>
<body>
	
@include('components._header')

<div class="container-fluid">
  <div class="row">
 
 @include('components._sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 
      @yield('content')
     
    </main>
  </div>
</div>

	<!-- <div class="container mt-3">
		
		<h1>Hello World</h1>
	</div> -->
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{asset('style/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('style/dashboard.js')}}"></script>
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