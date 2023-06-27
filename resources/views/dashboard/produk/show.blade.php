@extends('dashboard.layouts.main')
@section('container')

<main>
    <div class="container">
        <h2>{{ $produk->nama_produk}}</h2>
        <img src="/img/home/wedding2.jpg" class="img-fluid mb-3">
        <h2><strong>Deskripsi</strong></h2>
        {!! $produk->deskripsi !!}
        <h2><strong>Fasilitas</strong></h2>
        {!! $produk->fasilitas !!}
    </div>
</main>




@endsection