@extends('dashboardUser.layouts.main')
@section('container')

<main>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                    <h2>Ulang Tahun</h2>
                    <p>Pilihlah acara ulang tahun yang sesuai dengan kriteria anda.</p>
                    </div>
                </div>
                </div>
            </div>
            <nav>
                <div class="container">
                <ol>
                    <li><a href="/dashboardUser">Category</a></li>
                    <li>Ulang Tahun</li>
                </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 posts-list">
                    
                @foreach($produks as $produk)
                <div class="col-md-4">
                        <a href="/dashboardUser/ulangtahun/{{ $produk->id_produk }}">
                            <article class="card">
                            <div class="post-img">
                                <img src="/img/home/birthday1.jpg" alt="" class="img-fluid">
                            </div>
                            <p class="post-category">by {{ $seller->firstWhere('id', $produk->id_user)->name }}</p>
                            <h2 class="title">
                                <a href="/dashboardUser/ulangtahun/{{ $produk->id_produk }}">{{ $produk->nama_produk }}</a>
                            </h2>
                                <p>{{ Str::limit(strip_tags($produk->deskripsi),50,'...') }}</p>
                            </article>
                        </a>
                    </div>
                @endforeach

                    

                </div>
            </div>
        </section>


</main>

@endsection