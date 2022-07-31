<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
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
    public function total()
    {
        $total = $harga * $jpesan * $lama;
        $kembali = $bayar - $total;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model transaksi
        $transaksi = transaksi::all();
        return view('transaksi.index', compact('transaksi'));
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
        return view('transaksi.create', compact('pemesanan'));
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
            'no' => 'required|unique:transaksis|max:255',
            'id_pemesanans' => 'required',
            'nama' => 'required',            
            'nama_villa' => 'required',
            'jenis_villa' => 'required',
            'lama' => 'required',
            'harga' => 'required',
            'total' => 'required',
            'bayar' => 'required',
            'sisa' => 'required',
        ]);

        $transaksi = new transaksi();
        $transaksi->no = $request->no;
        $transaksi->id_pemesanans = $request->id_pemesanans;
        $transaksi->nama = $request->nama;
        $transaksi->nama_villa = $request->nama_villa;
        $transaksi->jenis_villa = $request->jenis_villa;
        $transaksi->lama = $request->lama;
        $transaksi->harga = $request->harga;
        $transaksi->total = $request->total;
        $transaksi->bayar = $request->bayar;
        $transaksi->sisa = $request->sisa;
        $transaksi->save();
        return redirect()->route('transaksi.index')
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
        $transaksi = transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $pemesanan = pemesanan::all();

        return view('transaksi.edit', compact('transaksi', 'pemesanan'));

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
            'no' => 'required|max:255',
            'id_pemesanans' => 'required',
            'nama' => 'required',
            'nama_villa' => 'required',
            'jenis_villa' => 'required',
            'lama' => 'required',
            'harga' => 'required',
            'total' => 'required',
            'bayar' => 'required',
            'sisa' => 'required',
        ]);

        $transaksi = transaksi::findOrFail($id);
        $transaksi->no = $request->no;
        $transaksi->id_pemesanans = $request->id_pemesanans;
        $transaksi->nama = $request->nama;
        $transaksi->nama_villa = $request->nama_villa;
        $transaksi->jenis_villa = $request->jenis_villa;
        $transaksi->lama = $request->lama;
        $transaksi->harga = $request->harga;
        $transaksi->total = $request->total;
        $transaksi->bayar = $request->bayar;
        $transaksi->sisa = $request->sisa;
        $transaksi->save();
        return redirect()->route('transaksi.index')
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
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
