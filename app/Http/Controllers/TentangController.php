<?php

namespace App\Http\Controllers;

use App\Models\tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
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
        $tentang = tentang::all();
        return view('tentang.index', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            
        ]);

        $tentang = new tentang();
        $tentang->judul = $request->judul;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->save();
        return redirect()->route('tentang.index')->with('succes',
            'Data berhasil dimuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tentang = tentang::findOrFail($id);
        return view('tentang.show', compact('tentang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tentang = tentang::findOrFail($id);
        return view('tentang.edit', compact('tentang'));
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
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $tentang = tentang::findOrFail($id);
        $tentang->judul = $request->judul;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->save();
        return redirect()->route('tentang.index')->with('succes',
            'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tentang = tentang::findOrfail($id);
        $tentang->delete();
        return redirect()->route('tentang.index')->with('Succes',
            'Data berhasil dihapus!');
    }
}
