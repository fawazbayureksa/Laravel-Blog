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