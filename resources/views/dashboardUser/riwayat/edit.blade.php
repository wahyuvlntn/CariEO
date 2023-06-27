@extends('dashboardUser.layouts.main')
@section('container')

<main>
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Pesanan</h1>  
          </div> 

          <form  method="POST" action="/dashboardUser/riwayat/{{ $pesanans->id_pesanan}}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="nama_acara" class="form-label">Nama Acara: </label>
              <input type="text" class="form-control" id="nama_acara" name="nama_acara" value="{{ $pesanans->nama_acara }}">
            </div>
            <div class="mb-3">
                <label for="waktu_acara" class="form-label">Waktu Acara: </label>
                <input type="date" name="waktu_acara" class="form-control" id="waktu_acara" value="{{ $pesanans->waktu_acara }}">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat: </label>
                <input id="alamat" type="hidden" name="alamat" value="{{ $pesanans->alamat }}">
          <trix-editor input="alamat"></trix-editor>
              </div>
              <div class="mb-3">
                <label for="catatan" class="form-label">Catatan: </label>
                <input id="catatan" type="hidden" name="catatan" value="{{ $pesanans->catatan }}">
          <trix-editor input="catatan"></trix-editor>
              </div>
              <div class="d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-dark">Submit</button>
              </div>
            
          </form>
    </div>
</main>

@endsection