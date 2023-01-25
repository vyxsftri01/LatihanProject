<?php

namespace App\Http\Controllers;
use App\Models\identitas;
use App\Models\villa;
use App\Models\review;
use Illuminate\Http\Request;

class detailController extends Controller
{
    public function index()
    {
        //menampilkan semua data dari model review
        $review = review::all();
        return view('user.hireath', compact('review'));
    }
    public function create()
    {
        //
        $identitas = identitas::all();
        $villa = villa::all();
        return view('user.review1', compact('identitas','villa'));
    }
    
    // public function total1($jpesan,$lama,$harga)
    // {
    //     $total = ($jpesan * $harga) * $lama;

    //     return $total ;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'id_identitas' => 'required',
            'id_villas' => 'required',            
            'pesan' => 'required',
            'bintang' => 'required',
        ]);

        $review = new review();
        $review->id_identitas = $request->id_identitas;
        $review->id_villas = $request->id_villas;
        $review->pesan = $request->pesan;
        $review->bintang = $request->bintang;
        $review->save();
        return redirect('/review')->with('succes',
            'Data berhasil dimuat!');
    }

}
