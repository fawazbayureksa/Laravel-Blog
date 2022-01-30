<style type="text/css">
	a.navbar-brand{
		font-weight: bold;
		font-size: 32px;
	}
</style>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow">
	<div class="container">
		<a href="/" class="navbar-brand">REXXCODE</a>
		
		 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav">
			    <li class="nav-item">
					<a href="/" class="nav-link {{($active === 'beranda' ) ? 'active' : ''}}" aria-current="page">Beranda</a>	
			    </li class="nav-item">
			    <li>
					<a href="#" class="nav-link " aria-current="page">Tentang</a>					
			    </li>
			    <li class="nav-item">
					<a href="/categories" class="nav-link {{($active === 'category' ) ? 'active' : ''}}" aria-current="page">Kategori</a>					
			    </li>
			</ul>
			<ul class="navbar-nav ms-auto">
<!-- 			    <li class="nav-item">
					<a href="/blog" class="btn btn-default {{($active === 'user' ) ? 'active' : ''}}" aria-current="page"><i class="fas fa-user"></i> User</a>					
			    </li> -->

		    	@auth
			    <!-- jika sudah login maka tampilkan -->
			     <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Selamat Datang, {{auth()->user()->name}}
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li> 
		            <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-user"></i> Profil</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <form action="/logout" method="POST">
		            	@csrf
		            	<button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
		            </form>
		          </ul>
		        </li>
			    @else
			    <!-- jika belum login maka tampilkan -->
			    <li class="nav-item mx-2">
					<a href="/login" class="btn btn-primary {{($active === 'login' ) ? 'active' : ''}}" aria-current="page"><i class="fas fa-sign-in-alt"></i> Login</a>
			    </li>
			    <li class="nav-item">
					<a href="/register" class="text-white btn btn-outline-success	" aria-current="page"></i>Register</a>
			    </li>
			    @endauth

			</ul>
		</div>
	</div>
</nav>