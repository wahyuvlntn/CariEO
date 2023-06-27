@extends('dashboardUser.layouts.main')
@section('container')

 <!-- Display produk detail -->
    <main>
        <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Pemesanan</h2>   
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="/dashboardUser">Category</a></li>
              <li><a href="/dashboardUser/ulangtahun">Ulang Tahun</a></li>
              <li>Pemesanan</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->
      
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-8">
                    <div data-bs-spy="scroll"data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                        <article class="blog-details">
                            <div class="post-img d-flex justify-content-center mt-1">
                                <img src="/img/home/birthday1.jpg" alt="" class="img-fluid rounded">
                            </div>
                            <h1 class="d-flex justify-content-center">{{ $produk->nama_produk }}</h2>
                            <h4 class="d-flex justify-content-center">by {{ $seller->firstWhere('id', $produk->id_user)->name }}</h4>
                            <br>
                            <br>
                            <h3>Deskripsi</h3>
                            {!! $produk->deskripsi !!}
                            <br>
                            <br>
                            <h3>Fasilitas</h3>
                            {!! $produk->fasilitas !!}
                            <br>
                            <br>
                            <h3>Harga</h3>
                            <h4>Rp {{ $produk->harga }}</h4>
                        </article>
                        
                        

                    </div>
                </div>
                <div class="col-4">
                    <div class="sidebar">
                        <!-- End sidebar search formn-->
                        <form action="/dashboardUser/ulangtahun" method="POST">
                        @csrf
                            <div class="sidebar-item categories">
                            <h2 class="d-flex justify-content-center">Form Pemesanan</h2>
                            <ul class="mt-4">
                                <label for="nama_acara" class="form-label">Nama Acara :</label>
                                <input type="text" name="nama_acara" class="form-control" id="nama_acara" placeholder="Nama Acara Anda">
                                <label for="tgl_pemesanan" class="form-label mt-3">Tanggal Pemesanan :</label>
                                <input type="date" name="tgl_pemesanan" class="form-control" id="tgl_pemesanan">
                                <label for="waktu_acara" class="form-label mt-3">Waktu Acara :</label>
                                <input type="date" name="waktu_acara" class="form-control" id="waktu_acara">
                                <label for="alamat" class="form-label mt-3">Alamat :</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Isi Alamat"></textarea>
                                <label for="catatan" class="form-label mt-3">Catatan :</label>
                                <textarea class="form-control" name="catatan" id="catatan" rows="3" placeholder="Isi Catatan Tambahan"></textarea>
                                <label for="exampleFormControlInput1" class="form-label mt-3">Harga :</label>
                                <input class="form-control" type="text" value="Rp {{ $produk->harga }}" aria-label="readonly input example" readonly>
                                <label for="kode_pembayaran" class="form-label mt-3">Metode Pembayaran :</label>
                                <select class="form-select" id="kode_pembayaran" name="kode_pembayaran">
                                <option selected="true" disabled="disabled">Pilih Metode Pembayaran</option>
                                @foreach ($pembayaran as $pembayaran)
                                        <option value="{{ $pembayaran->kode_pembayaran }}">{{ $pembayaran->metode_pembayaran }}</option>
                                @endforeach
                                </select> 
                                <br>
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button type="Submit" class="btn btn-dark mt-3 w-25">Pesan</button>  
                                </div>         
                            </ul>
                            </div><!-- End sidebar categories-->                           
                        </form>
                      </div><!-- End Blog Sidebar -->
                </div>
            </div>
        </div>
      </section>
    </main>

@endsection