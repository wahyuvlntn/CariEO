<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboardUser">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboardUser/produk">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
               Produk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboardUser/pesanan">
              <svg class="bi"><use xlink:href="#graph-up"/></svg>
              Pesanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboardUser/profile">
              <svg class="bi"><use xlink:href="#person-circle"/></svg>
              Profile
            </a>
          </li>
          
      

        <hr class="my-3">

        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
              <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="nav-link px-3">
                      <i class="bi bi-box-arrow-right"></i>Logout
                  </button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>