  <!-- Top Bar-->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:cariEO@gmail.com">carieo@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812 9999 999</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</section>
<!-- End Top Bar-->

<!-- Navbar -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        
        <h1>CariEO<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                <li></li>
                <a href="/register" class="nav-link {{ ($title === "register") ? 'active' : '' }}"><button class="btn btn-primary" type="button">Register</button></a>
                <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : '' }}"><button class="btn btn-primary" type="button">Login</button></a>
            </ul>
        </nav><!-- .navbar -->
        
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
<!-- End Navbar -->