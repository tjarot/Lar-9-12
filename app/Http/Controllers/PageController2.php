<?php

namespace App\Http\Controllers;
class PageController2 extends Controller
{
public function index()
{
return view('index');
}

public function tampil()
{
$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
"Lisa Permata"];
return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);

}
}