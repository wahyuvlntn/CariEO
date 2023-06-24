@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Produk</h1>  
</div> 

<div class="table-responsive small">
  <a href="/dashboardUser/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
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
          <td>{{ $produk->deskripsi }}</td>
          <td>{{ $produk->fasilitas }}</td>
          <td>{{ $produk->id_kategori}}</td>
          <td>{{ $produk->harga }}</td>
          <td>
            <a href="/dashboard/produk/{{ $produk->id_produk}}" class="badge bg-info">
              <svg class="bi"><use xlink:href="#eye"/></svg>   
            </a>
            <a href="/dashboard/produk/{{ $produk->id_produk}}/edit" class="badge bg-warning">
              <svg class="bi"><use xlink:href="#edit"/></svg>   
            </a>
            <form action="/dashboard/produk/{{ $produk->id_produk}}" method="POST" class="d-inline">
              @method('delete')
              @csrf
            
            <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin ingin menghapus produk?')">
              <svg class="bi"><use xlink:href="#x-circle"/></svg>
            </button>
            </form>
            
          </td>
        </tr>   
        @endforeach
        
        
      </tbody>
    </table>
  </div>

@endsection