@extends('frontend.fe_template')

@section('title','Login-REXXCODE - Share Anything You Know');


@section('content')
<body>
	<div class="container mt-4">
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection