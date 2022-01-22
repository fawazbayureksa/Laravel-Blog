<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Registrasi-REXXCODE - Share Anything You Know</title>
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
					<div class="card-body ">
						<h3 class="text-center fs-4 mb-3">Registration</h3>
						<hr>
						<form action="/register" method="POST">
							@csrf
							<div class="input-group mb-3">
								<!-- @error('name')is-invalid @enderror , jika ada eror di data name maka akan invalid -->

								<!--{{old('nama')}}, agar tidak perlu mengetikan ulang jika melakukan kesalahan atau saat halaman me refresh ulang -->
								  <span class="input-group-text"><i class="fas fa-user"></i></span>
								  <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" class="form-control" placeholder="Fullname ..." value="{{old('name')}}">
								  @error('name')
								  <div class="invalid-feedback">
								  	{{$message}}
								  </div>
								  @enderror
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-users	"></i></span>
								  <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" class="form-control" placeholder="Username ..." value="{{old('username')}}">
								   @error('username')
								  <div class="invalid-feedback">
								  	{{$message}}
								  </div>
								  @enderror
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
								  <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}" class="form-control" placeholder="Email ...">
								   @error('email')
								  <div class="invalid-feedback">
								  	{{$message}}
								  </div>
								  @enderror
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-lock"></i></span>
								  <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" class="form-control" placeholder="Password ...">
								   @error('password')
								  <div class="invalid-feedback">
								  	{{$message}}
								  </div>
								  @enderror
							</div>
							<div class="row my-4">
								<button class="btn btn-primary btn-md text-white" type="submit"><i class="fas fa-paper-plane"></i> Registration</button>
							</div>
						</form>
						<div class="text-center fs-6">
							Have an account
							<a href="/login" class="text-decoration-none">Login</a>
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
