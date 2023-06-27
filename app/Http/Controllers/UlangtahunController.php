<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class UlangtahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboardUser.ulangtahun.index',[
            'produks' => Produk::where('id_kategori', 2)->get(),
            'seller'=>User::all()        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardUser.ulangtahun.show',[
            'pembayaran'=>Pembayaran::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Produk $produk)
    {
        // return $request;
        $validatedData=$request->validate([
            'nama_acara'=>'required',
            'tgl_pemesanan'=>'required',
            'waktu_acara'=>'required',
            'alamat'=>'required',
            'catatan' => 'required',
            'kode_pembayaran' => 'required',
        ]);
        $produk = Produk::where('id_produk', $request->idproduk)->first();
        $validatedData['id_produk'] = $request->idproduk;
        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['id_seller'] = $produk->id_user;

        Pesanan::create($validatedData);
        return redirect('/dashboardUser');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_produk)
    {
        $produk = Produk::find($id_produk);
        return view('dashboardUser.ulangtahun.show',[
            'produk'=>$produk,
            'seller'=>User::all(),
            'pembayaran'=>Pembayaran::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
