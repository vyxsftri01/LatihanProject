<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['no_pengguna', 'nama', 'alamat', 'tgl_lahir', 'jk', 'no_tlp', 'no_ktp'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function pemesanans()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Pemesanan::class, 'id_identitas');
    }
    public function riview()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Review::class, 'id_identitas');
    }
    public function riwayats()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'riwayat' melalui id_siswa
        return $this->hasOne(Riwayat::class, 'id_identitas');
    }
}