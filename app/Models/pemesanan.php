<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['no','id_identitas', 'id_villas', 'lama', 'tgl_masuk', 'tgl_keluar', 'nama_villa' , 'total'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function transaksis()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'transaksi' melalui id_siswa
        return $this->hasOne(Transaksi::class, 'id_pemesanans');
    }
    
    public function identitas()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->belongsTo(Identitas::class, 'id_identitas');
    }

    // membuat relasi one to many di model
    public function villas()
    {
        // data dari model 'Siswa' bisa dimiliki
        // oleh model 'Guru' melalui 'id_siswa'
        return $this->belongsTo(villa::class, 'id_villas');
    }
    

}
