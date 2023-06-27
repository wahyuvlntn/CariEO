@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Pesanan</h1>  
</div> 

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Acara</th>
          <th scope="col">Catatan</th>
          <th scope="col">Alamat</th>
          <th scope="col">Tanggal Pemesanan</th>
          <th scope="col">Waktu Acara</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pesanans as $pesanan)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pesanan->nama_acara }}</td>
          <td>{{ $pesanan->catatan }}</td>
          <td>{{ $pesanan->alamat }}</td>
          <td>{{ $pesanan->tgl_pemesanan }}</td>
          <td>{{ $pesanan->waktu_acara }}</td>
          <td>{{ $produks->firstWhere('id_produk', $pesanan->id_produk)->nama_produk}}</td>
          <td>{{ $produks->firstWhere('id_produk', $pesanan->id_produk)->harga}}</td>
          
          
          
        </tr>   
        @endforeach
        
        
      </tbody>
    </table>
  </div>

@endsection