<?php
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route; 

Route::get('/', function () { 
    return "Hello World"; 
}); 

Route::get('/user', function () { 
    return "Hello User"; 
}); 

Route::get('/form-produk', function () { 
    return view('form-produk'); 
}); 

Route::get('/produk/edit', function () { 
    return view('edit-produk'); 
});

Route::post('/kirim-produk', function (Request $request) { 
    $nama = $request->input('nama'); 
    $harga = $request->input('harga'); 
    $kategori = $request->input('kategori'); 
    
    return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b> 
            termasuk kategori <b>$kategori</b> berhasil dikirim!";
});

Route::get('/produk/edit-harga', function () { 
    return view('edit-harga'); 
}); 

Route::patch('/produk/update-harga', function (Request $request) { 
    $hargaBaru = $request->input('harga'); 
    return "Harga produk berhasil diperbarui menjadi <b>Rp$hargaBaru</b> 
            (tanpa mengubah data lain)."; 
});

Route::put('/produk/update', function (Request $request) { 
    $namaBaru = $request->input('nama'); 
    $hargaBaru = $request->input('harga'); 
    $kategoriBaru = $request->input('kategori'); 
 
    return "Data produk berhasil diperbarui menjadi:<br> 
            <b>Nama:</b> $namaBaru <br> 
            <b>Harga:</b> Rp$hargaBaru <br> 
            <b>Kategori:</b> $kategoriBaru"; 
});