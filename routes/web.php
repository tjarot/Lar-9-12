<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController2; // proses import namespace
use App\Http\Controllers\Admin\PageController3;

// Route::get('/', function () {
//     return view('welcome');
// });

// BAB 9
// Route::get('/belajar_1', function () {
//     return view('BAB 9.belajar_1');
// });

// Route::get('/kode_scss', function () {
//     return view('BAB 9.kode_scss');
// });

// Route::get('/bundling', function () {
//     return view('BAB 9.bundling_bootstrap');
// });


// BAB 10 CONTROLLER
// Route::get('/rumah', [App\Http\Controllers\PageController::class,'index']);
// Route::get('/mahasiswa10',[App\Http\Controllers\PageController::class,'tampil']);

// Route::get('/', [PageController2::class, 'index']);
// Route::get('/mahasiswa', [PageController2::class, 'tampil']);

Route::get('/admin/index', [PageController::class, 'index']);
Route::get('/admin/mahasiswa12', [PageController3::class, 'tampil']);

