<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class identitas2Controller extends Controller
{

    public function create()
    {
        return view('user.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_pengguna' => 'required|unique:identitas|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'no_ktp' => 'required',
        
        ]);

        $identitas = new identitas();
        $identitas->no_pengguna = $request->no_pengguna;
        $identitas->nama = $request->nama;
        $identitas->alamat = $request->alamat;
        $identitas->tgl_lahir = $request->tgl_lahir;
        $identitas->jk = $request->jk;
        $identitas->no_tlp = $request->no_tlp;
        $identitas->no_ktp = $request->no_ktp;
        $identitas->save();
        return redirect('/form')->with('succes',
            'Data berhasil dimuat!');
    }

}
