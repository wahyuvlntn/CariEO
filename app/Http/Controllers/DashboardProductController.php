<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.produk.index',[
            'produks' => Produk::where('id_user', auth()->user()->id)->get(),
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.produk.create',[
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $validatedData=$request->validate([
            'nama_produk'=>'required',
            'deskripsi'=>'required',
            'fasilitas'=>'required',
            'id_kategori'=>'required',
            'harga' => 'required',
        ]);
        $validatedData['id_user'] = auth()->user()->id;

        Produk::create($validatedData);
        return redirect('/dashboard');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $produk = Produk::find($produk['id_produk']); // Mengambil data produk dengan id_produk 1

        return view('dashboard.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('dashboard.produk.edit',[
            'produk'=>$produk,
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $validatedData=$request->validate([
            'nama_produk'=>'required',
            'deskripsi'=>'required',
            'fasilitas'=>'required',
            'id_kategori'=>'required',
            'harga' => 'required',
        ]);
        $validatedData['id_user'] = auth()->user()->id;

        
        Produk::where('id_produk',$produk->id_produk)->
        update($validatedData);
        return redirect('/dashboard/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        Produk::destroy($produk->id_produk);
        return redirect('/dashboard/produk');
    }

   

    

}
