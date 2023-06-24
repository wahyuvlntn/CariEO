@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Produk</h1>  
  </div> 

  <form  method="POST" action="/dashboardUser/produk">
    @csrf
    <div class="mb-3">
      <label for="nama_produk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="nama_produk" name="nama_produk">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input id="deskripsi" type="hidden" name="deskripsi">
  <trix-editor input="deskripsi"></trix-editor>
      </div>
      <div class="mb-3">
        <label for="fasilitas" class="form-label">Fasilitas</label>
        <input id="fasilitas" type="hidden" name="fasilitas">
  <trix-editor input="fasilitas"></trix-editor>
      </div>
    <div class="mb-3">
        <label for="id_kategori" class="form-label">Kategori</label>
        <select class="form-select" name="id_kategori" id="id_kategori">
            @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
          </select>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection