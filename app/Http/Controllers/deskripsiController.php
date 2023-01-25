<?php

namespace App\Http\Controllers;
use App\Models\tentang;
use Illuminate\Http\Request;

class deskripsiController extends Controller
{
    public function index()
    {
        $tentang = tentang::all();
        return view('user.about', compact('tentang'));
    }
}
