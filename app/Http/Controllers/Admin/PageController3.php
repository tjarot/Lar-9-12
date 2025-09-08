<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageController3 extends Controller
{
public function index()
{
return view('index');
}

public function tampil()
{
$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
"Lisa Permata"];
return view('mahasiswa12')->with('mahasiswa12', $arrMahasiswa);

}
}