<?php

namespace App\Http\Controllers;

use App\Models\identitas;
use App\Models\villa;
use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
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
        //menampilkan semua data dari model review
        $review = review::all();
        return view('review.index', compact('review'));
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
        return view('review.create', compact('identitas','villa'));
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
            
        ]);

        $review = new review();
        $review->id_identitas = $request->id_identitas;
        $review->id_villas = $request->id_villas;
        $review->pesan = $request->pesan;
        
        $review->save();
        return redirect('/hireath')->with('succes',
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
        $review = review::findOrFail($id);
        return view('review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = review::findOrFail($id);
        $identitas = identitas::all();
        $villa = villa::all();

        return view('review.edit', compact('review', 'identitas', 'villa'));

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
            'id_identitas' => 'required',
            'id_villas' => 'required',
            'pesan' => 'required',
            
        ]);

        $review = review::findOrFail($id);
        $review->id_identitas = $request->id_identitas;
        $review->id_villas = $request->id_villas;
       
        $review->save();
        return redirect()->route('review.index')
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
        $review = review::findOrFail($id);
        $review->delete();
        return redirect()->route('review.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
