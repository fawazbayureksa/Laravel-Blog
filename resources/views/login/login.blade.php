<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Login - REXXCODE-Share Anything You Know</title>
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/solid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
</head>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<h1 class="fs-2 text-center">REXXCODE</h1>
			<div class="col-md-6 col-sm-8 col-lg-4">
				<div class="card rounded-2 shadow-md pb-5 px-3">
					<div class="card-body text-center">
						<h3 class="fs-4 mb-3">Sign In to Rexxcode</h3>
						<hr>
						<form action="">
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
								  <input type="text" class="form-control" class="form-control" placeholder="Email ...">
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-lock"></i></span>
								  <input type="password" class="form-control" class="form-control" placeholder="Password ...">
							</div>
							<div class="row my-4">
								<button class="btn btn-primary btn-md text-white" type="submit">Login</button>
							</div>
						</form>
						<div class="fs-6">
							Create an account
							<a href="/register" class="text-decoration-none">Register</a>
						</div>
					</div>
					<div class="text-center">
						<a href="/" class="text-decoration-none">Beranda</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{asset('style/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>
