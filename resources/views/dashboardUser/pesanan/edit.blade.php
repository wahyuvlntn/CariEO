@extends('dashboardUser.layouts.main')
@section('container')

<main>
  <div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Pesanan</h1>  
    </div>
    <form action="/dashboardUser/riwayat/{{ $pesanans->id_pesanan}}" method="POST">
      @method('put')
      @csrf
          <div class="sidebar-item categories">
          <ul class="mt-4">
              <label for="nama_acara" class="form-label">Nama Acara :</label>
              <input type="text" name="nama_acara" class="form-control" id="nama_acara" value="{{ $pesanans->nama_acara }}">
              <label for="waktu_acara" class="form-label mt-3">Waktu Acara :</label>
              <input type="date" name="waktu_acara" class="form-control" id="waktu_acara" value="{{ $pesanans->waktu_acara }}">
              <label for="alamat" class="form-label mt-3">Alamat :</label>
              <input id="alamat" type="hidden" name="alamat" value="{{ $pesanans->alamat }}">
              <trix-editor input="alamat"></trix-editor>
              <label for="catatan" class="form-label mt-3">Catatan :</label>
              <input id="catatan" type="hidden" name="catatan" value="{{ $pesanans->catatan }}">
              <trix-editor input="catatan"></trix-editor>
              <br>
              <div class="d-flex flex-wrap justify-content-center">
                  <button type="Submit" class="btn btn-dark mt-3 w-25">Submit</button>  
              </div>
          </ul>
          </div><!-- End sidebar categories-->                           
      </form>
  </div>
</main>


@endsection