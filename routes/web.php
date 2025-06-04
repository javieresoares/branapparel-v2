<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $produks = Produk::latest()->take(8)->get();
    return view('pages.home', compact('produks'));
});