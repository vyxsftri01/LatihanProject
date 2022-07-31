<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    public $fillable = ['id_pemesanans', 'nama', 'nama_villa', 'jenis_villa', 'lama', 'harga', 'total','bayar','sisa'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function riwayats()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Riwayat::class, 'id_transaksis');
    }
    public function pemesanans()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->belongsTo(Pemesanan::class, 'id_pemesanans');
    }

    // membuat relasi one to many di model
    
}
