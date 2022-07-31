<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    public $fillable = ['id_pemesanans', 'nama_villa', 'jenis_villa', 'lama', 'jpesan','tgl_masuk','tgl_keluar','harga', 'id_transaksis','bayar','sisa'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    
    public function pemesanans()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Pemesanan::class, 'id_pemesanans');
    }
    public function transaksis()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Transaksi::class, 'id_transaksis');
    }

}
