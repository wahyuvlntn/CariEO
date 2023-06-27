<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori;


class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;

        $pesanans = Pesanan::where('id_user', $userId)->get();
        
        // Mengambil id_produk dari setiap pesanan
        $produkIds = $pesanans->pluck('id_produk')->toArray();

        // Mengambil data produk berdasarkan id_produk
        $produks = Produk::whereIn('id_produk', $produkIds)->get();
        return view('dashboardUser.riwayat.index',[
            'pesanans' => $pesanans,
            'produks' => $produks,
            'seller' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        return view('dashboardUser.riwayat.edit',[
            'pesanans' => $pesanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $validatedData=$request->validate([
            'nama_acara'=>'required',
            'waktu_acara'=>'required',
            'alamat'=>'required',
            'catatan'=>'required',
        ]);
        $validatedData['id_user'] = auth()->user()->id;
        
        //Pesanan::where('id_pesanan',$pesanan->id_pesanan)->
        Pesanan::where('id_pesanan',$pesanan->id_pesanan)->
        update($validatedData);
        return redirect('/dashboardUser/riwayat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
