@extends('dashboard.layouts.main')
@section('container')

    
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h2>Produk</h2>
      @foreach ($produks as $produk)
      <div class="card mb-3" style="max-width: 100%">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/category/kategoripernikahan.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <a href="/dashboard/produk/{{ $produk->id_produk }}" class="card-title"><strong>{{ $produk->nama_produk }}</strong></a>
              <p class="card-text">{{ Str::limit(strip_tags($produk->deskripsi), 500, '...') }}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

@endsection