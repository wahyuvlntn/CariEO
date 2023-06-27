@extends('dashboard.layouts.main')
@section('container')

<main>
  <div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Produk</h1>
    </div>
    
    <div class="table-responsive small">
      <a href="/dashboard/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Fasilitas</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produks as $produk)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>{{ Str::limit(strip_tags($produk->deskripsi), 25, '...') }}</td>
            <td>{{ Str::limit(strip_tags($produk->fasilitas), 25, '...') }}</td>
            <td>{{ $kategoris->firstWhere('id_kategori', $produk->id_kategori)->nama_kategori}}</td>
            <td>{{ $produk->harga }}</td>
            <td>
              <a href="/dashboard/produk/{{ $produk->id_produk}}" class="badge bg-info"><span>Show</span>
                <i class="bi bi-eye"></i>
              </a>
              <a href="/dashboard/produk/{{ $produk->id_produk}}/edit" class="badge bg-warning"><span>Edit</span>
                <i class="bi bi-pencil"></i>
              </a>
              <form action="/dashboard/produk/{{ $produk->id_produk}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
    
                <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin ingin menghapus produk?')">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</main>

@endsection