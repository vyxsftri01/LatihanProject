<?php

namespace App\Http\Controllers;

use App\Models\villa;
use Illuminate\Http\Request;

class villaController extends Controller
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

    public function index()
    {
        //
        $villa = villa::all();
        return view('villa.index', compact('villa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('villa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'kode_villa' => 'required',
            'status' => 'required',
            'nama_villa' => 'required',
            'jenis_villa' => 'required',
            'foto' => 'required|image|max:2048',
            'max' => 'required',
            'lantai' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'view' => 'required',
            'kasur' => 'required',
            'harga' => 'required',

        ]);

        $villa = new villa();
        $villa->kode_villa = $request->kode_villa;
        $villa->status = $request->status;
        $villa->nama_villa = $request->nama_villa;
        $villa->jenis_villa = $request->jenis_villa;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/villa/', $name);
            $villa->foto = $name;
        }
        $villa->max = $request->max;
        $villa->lantai = $request->lantai;
        $villa->kamar = $request->kamar;
        $villa->kamar_mandi = $request->kamar_mandi;
        $villa->view = $request->view;
        $villa->kasur = $request->kasur;
        $villa->harga = $request->harga;
        $villa->save();
        return redirect()->route('villa.index')
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
        //
        $villa = villa::findOrFail($id);
        return view('villa.show', compact('villa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $villa = villa::findOrFail($id);
        return view('villa.edit', compact('villa'));
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
        //
        $validated = $request->validate([
            'kode_villa' => 'required',
            'status' => 'required',
            'nama_villa' => 'required',
            'jenis_villa' => 'required',
            'foto' => 'required|image|max:2048',
            'max' => 'required',
            'lantai' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'view' => 'required',
            'kasur' => 'required',
            'harga' => 'required',

        ]);

        $villa = villa::findOrFail($id);
        $villa->kode_villa = $request->kode_villa;
        $villa->status = $request->status;
        $villa->nama_villa = $request->nama_villa;
        $villa->jenis_villa = $request->jenis_villa;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/villa/', $name);
            $villa->foto = $name;
        }
        $villa->max = $request->max;
        $villa->lantai = $request->lantai;
        $villa->kamar = $request->kamar;
        $villa->kamar_mandi = $request->kamar_mandi;
        $villa->view = $request->view;
        $villa->kasur = $request->kasur;
        $villa->harga = $request->harga;
        $villa->save();
        return redirect()->route('villa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $villa = villa::findOrFail($id);
        $villa->delete();
        return redirect()->route('villa.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
