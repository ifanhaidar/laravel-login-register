<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow navbar-expand-lg">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">SKY SECURITY</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-info w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav ">
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Hallo, {{ auth()->user()->companyname }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="/profil"><i class="bi bi-person-circle"></i>Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
         </li>
      </ul>
    </li>
  </div>
  </div>
  </nav>
  
  
    </div>
  </header>