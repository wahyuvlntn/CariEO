

<div class="sidebar pt-3  border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title font-weight-bold" id="sidebarMenuLabel">CariEO</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <h2 class="text-center">Seller</h2>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
          <i class="bi bi-house"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/produk">
          <i class="bi bi-file-earmark"></i>
             Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/pesanan">
          <i class="bi bi-file-text"></i>
            Pesanan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/profile">
          <i class="bi bi-person-circle"></i>
            Profile
          </a>
        </li>
        
    

      <hr class="my-3">

      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link px-3">
                <i class="bi bi-door-open-fill"></i>Logout
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
  </div>