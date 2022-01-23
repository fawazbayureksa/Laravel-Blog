<style type="text/css">
	a.navbar-brand{
		font-weight: bold;
		font-size: 32px;
	}
</style>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-warning shadow">
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
					<a href="#" class="nav-link " aria-current="page">About</a>					
			    </li>
			    <li class="nav-item">
					<a href="/categories" class="nav-link {{($active === 'category' ) ? 'active' : ''}}" aria-current="page">Category</a>					
			    </li>
			</ul>
			<ul class="navbar-nav ms-auto">
			   <!--  <li class="nav-item">
					<a href="/blog" class="btn btn-default {{($active === 'user' ) ? 'active' : ''}}" aria-current="page"><i class="fas fa-user"></i> User</a>					
			    </li>
			    <li class="nav-item"> -->
					<a href="/login" class="btn btn-primary {{($active === 'login' ) ? 'active' : ''}}" aria-current="page"><i class="fas fa-sign-in-alt"></i> Login</a>
			    </li>
			</ul>
		</div>
	</div>
</nav>