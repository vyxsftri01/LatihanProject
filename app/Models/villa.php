<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villa extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['kode_villa','status','nama_villa', 'jenis_villa', 'foto','max','lantai','kamar','kamar_mandi','view','kasur','harga'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // membuat relasi one to one
    public function pemesanans()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Pemesanan::class, 'id_villas');
    }
    public function review()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'pemesanan' melalui id_siswa
        return $this->hasOne(Riview::class, 'id_villas');
    }
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/villa/' . $this->foto))) {
            return asset('images/villa/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/villa/' . $this->foto))) {
            return unlink(public_path('images/villa/' . $this->foto));
        }
    }
}
