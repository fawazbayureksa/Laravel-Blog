<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand fs-4 col-md-3 col-lg-2 me-0 px-3" href="/">REXXCODE</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    	<form action="/logout" method="POST">
        	@csrf
        	<button type="submit" class="btn btn-danger btn-md px-3 mx-3"><i class="fas fa-sign-out-alt"></i> Logout</button>
		 </form>
		
    </div>
  </div>
</header>