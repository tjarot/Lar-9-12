<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('rumah');
    }

    public function tampil()
    {
        $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata"];
        return view('mahasiswa10', compact('arrMahasiswa'));
    }
}
