   <style>
     nav{
      background-color: lightgray;
     }
   </style>

   <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <!-- {{Request::is('dashboard') ? 'active' : '' }} cara baca: jika ada request yang URL nya adalah dashboard maka add active else: kosong -->
            <a class="nav-link {{Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <i class="fas fa-home"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">

            <a class="nav-link {{Request::is('dashboard/artikel') ? 'active' : '' }}" href="/dashboard/artikel">
              <i class="fas fa-book-open"></i>
              Artikel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-user-edit"></i>
              Penulis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-project-diagram"></i>
              Kategori
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="fas fa-cog"> Pengaturan</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              <i class="fas fa-user"></i>
              Profil
            </a>
          </li>
        </ul>
      </div>
    </nav>