@extends('dashboardUser.layouts.main')
@section('container')
<main>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                    <h2>Category</h2>
                    <p>Pilihlah kategori acara yang ingin anda selenggarakan.</p>
                    </div>
                </div>
                </div>
            </div>
            <nav>
                <div class="container">
                <ol>
                    <li>Category</li>
                </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col col-md-auto">
                    <a href="/dashboardUser/pernikahan"><img class="rounded" src="/img/category/kategoripernikahan.jpg" alt=""></a>
                </div>
                <div class="col col-md-auto">
                <a href="/dashboardUser/ulangtahun"><img class="rounded" src="/img/category/kategoribirthday.jpg" alt=""></a>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col col-md-auto">
                <a href="/dashboardUser/farewell"><img class="rounded" src="/img/category/kategorifarewell.jpg" alt=""></a>
                </div>
                <div class="col col-md-auto">
                <a href="/dashboardUser/konser"><img class="rounded" src="/img/category/kategorikonser.jpg" alt=""></a>
                </div>
            </div>
        </div>
        </section><!-- End Blog Section -->
</main>
@endsection