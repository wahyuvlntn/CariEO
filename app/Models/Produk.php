<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'fasilitas',
        'harga',
        'id_kategori',
        'id_user'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function seller()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
