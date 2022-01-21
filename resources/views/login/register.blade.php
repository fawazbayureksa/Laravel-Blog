@extends('frontend.fe_template')

@section('title','Registrasi-REXXCODE - Share Anything You Know');


@section('content')
<body>
	<div class="container mt-4">
		<div class="row justify-content-center">
			<h1 class="fs-2 text-center">REXXCODE</h1>
			<div class="col-md-6 col-sm-8 col-lg-4">
				<div class="card rounded-2 shadow-md pb-5 px-3">
					<div class="card-body text-center">
						<h3 class="fs-4 mb-3">Registration</h3>
						<hr>
						<form action="" method="POST">
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-user"></i></span>
								  <input type="text" class="form-control" name="fullname" class="form-control" placeholder="Fullname ...">
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-users	"></i></span>
								  <input type="text" class="form-control" name="username" class="form-control" placeholder="Username ...">
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
								  <input type="email" name="email" class="form-control" class="form-control" placeholder="Email ...">
							</div>
							<div class="input-group mb-3">
								  <span class="input-group-text"><i class="fas fa-lock"></i></span>
								  <input type="password" name="password" class="form-control" class="form-control" placeholder="Password ...">
							</div>
							<div class="row my-4">
								<button class="btn btn-primary btn-md text-white" type="submit"><i class="fas fa-paper-plane"></i> Registration</button>
							</div>
						</form>
						<div class="fs-6">
							Have an account
							<a href="/login" class="text-decoration-none">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection