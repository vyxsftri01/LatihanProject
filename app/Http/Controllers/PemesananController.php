<?php

namespace App\Http\Controllers;

use App\Models\identitas;
use App\Models\villa;
use App\Models\pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
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
        //menampilkan semua data dari model pemesanan
        $pemesanan = pemesanan::all();
        return view('pemesanan.index', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $identitas = identitas::all();
        $villa = villa::all();
        return view('pemesanan.create', compact('identitas','villa'));
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
            'no' => 'required|unique:pemesanans|max:255',
            'id_identitas' => 'required',
            'jenis_villa' => 'required',            
            'jpesan' => 'required',
            'lama' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'id_villas' => 'required',
        ]);

        $pemesanan = new pemesanan();
        $pemesanan->no = $request->no;
        $pemesanan->id_identitas = $request->id_identitas;
        $pemesanan->jenis_villa = $request->jenis_villa;
        $pemesanan->jpesan = $request->jpesan;
        $pemesanan->lama = $request->lama;
        $pemesanan->tgl_masuk = $request->tgl_masuk;
        $pemesanan->tgl_keluar = $request->tgl_keluar;
        $pemesanan->id_villa = $request->id_villa;
        $pemesanan->save();
        return redirect()->route('pemesanan.index')
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
        $pemesanan = pemesanan::findOrFail($id);
        return view('pemesanan.show', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemesanan = pemesanan::findOrFail($id);
        $identitas = identitas::all();
        $villa = villa::all();

        return view('pemesanan.edit', compact('pemesanan', 'identitas', 'villa'));

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
            'id_identitas' => 'required',
            'jenis_villa' => 'required',
            'jpesan' => 'required',
            'lama' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'id_villas' => 'required',
        ]);

        $pemesanan = pemesanan::findOrFail($id);
        $pemesanan->no = $request->no;
        $pemesanan->id_identitas = $request->id_identitas;
        $pemesanan->jenis_villa = $request->jenis_villa;
        $pemesanan->jpesan = $request->jpesan;
        $pemesanan->lama = $request->lama;
        $pemesanan->tgl_masuk = $request->tgl_masuk;
        $pemesanan->tgl_keluar = $request->tgl_keluar;
        $pemesanan->id_villas = $request->id_villas;
        $pemesanan->save();
        return redirect()->route('pemesanan.index')
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
        $pemesanan = pemesanan::findOrFail($id);
        $pemesanan->delete();
        return redirect()->route('pemesanan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
