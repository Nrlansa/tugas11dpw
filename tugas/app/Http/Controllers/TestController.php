<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showDashboard(){
        return view ('tamplate.Dashboard');
    }

    public function showkategori(){
        return view('tamplate.kategori');
    }

    public function showproduk(){
        return view('tamplate.produk');
    }

    public function showdaftar(){
        return view('tamplate.daftar');
    }
}
