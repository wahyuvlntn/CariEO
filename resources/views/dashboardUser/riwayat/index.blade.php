@extends('dashboardUser.layouts.main')
@section('container')

<main>
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Riwayat Pemesanan</h1>  
          </div> 

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Acara</th>
                  <th scope="col">Catatan</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tanggal Pemesanan</th>
                  <th scope="col">Waktu Acara</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Aksi</th>
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
                  <td>Rp. {{ $produks->firstWhere('id_produk', $pesanan->id_produk)->harga}}</td>
                  <td>
                    <a href="/dashboardUser/riwayat/{{ $pesanan->id_pesanan}}/edit" class="badge bg-warning"><span>Edit</span>
                        <i class="bi bi-pencil"></i>
                      </a>
                      <form action="/dashboardUser/riwayat/{{ $pesanan->id_pesanan}}" method="POST" class="d-inline">
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