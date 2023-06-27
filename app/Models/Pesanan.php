<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pesanan';
    protected $fillable = [
        'nama_acara',
        'tgl_pemesanan',
        'waktu_acara',
        'alamat',
        'catatan',
        'id_user',
        'id_seller',
        'id_produk',
        'kode_pembayaran'
    ];
}
