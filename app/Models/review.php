<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['id_identitas','id_villas' , 'pesan'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    
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
