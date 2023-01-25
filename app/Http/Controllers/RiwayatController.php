<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\villa;
use App\Models\riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model riwayat
        $riwayat = riwayat::all();
        return view('riwayat.index', compact('riwayat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pemesanan = pemesanan::all();
        $villa = villa::all();
        return view('riwayat.create', compact('pemesanan','villa'));
    }

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
            'id_villas' => 'required',
            'id_pemesanans' => 'required',            
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'harga' => 'required',
            'total' => 'required',
        ]);

        $riwayat = new riwayat();
        $riwayat->id_villas = $request->id_villas;
        $riwayat->id_pemesanans = $request->id_pemesanans;
        $riwayat->tgl_masuk = $request->tgl_masuk;
        $riwayat->tgl_keluar = $request->tgl_keluar;
        $riwayat->harga =$request->harga;
        $riwayat->total = $request->total;
        $riwayat->save();
        return redirect()->route('riwayat.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $riwayat = riwayat::findOrFail($id);
        return view('riwayat.show', compact('riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $riwayat = riwayat::findOrFail($id);
        $pemesanan = pemesanan::all();
        $villa = villa::all();

        return view('riwayat.edit', compact('riwayat', 'pemesanan', 'villa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'id_villas' => 'required',
            'harga' => 'required',            
            'id_pemesanans' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'total' => 'required',
        ]);

        $riwayat = riwayat::findOrFail($id);
        $riwayat->id_villas = $request->id_villas;
        $riwayat->harga = $request->harga;
        $riwayat->id_pemesanans = $request->id_pemesanans;
        $riwayat->tgl_masuk = $request->tgl_masuk;
        $riwayat->tgl_keluar = $request->tgl_keluar;
        $riwayat->total = $request->total;
        $riwayat->save();

        return redirect()->route('riwayat.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riwayat = riwayat::findOrFail($id);
        $riwayat->delete();
        return redirect()->route('riwayat.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
