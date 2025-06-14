<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produk;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KontakController;

// Homepage
Route::get('/', function () {
    $produks = Produk::latest()->take(8)->get();
    return view('pages.home', compact('produks'));
})->name('home');

// Tentang Kami
Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

// Produk
Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

// Portofolio
Route::get('/portofolio', function () {
    return view('pages.portofolio');
})->name('portofolio');

// Blog
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// FAQ
Route::get('/faq', [FaqController::class, 'showFaq'])->name('faq');

// Kontak Kami
Route::get('/kontak-kami', function () {
    return view('pages.kontak-kami');
})->name('kontak-kami');

// Kontak submit
Route::post('/kontak-submit', [KontakController::class, 'submit'])->name('kontak.submit');


// Karir
Route::get('/karir', function () {
    return view('pages.karir');
})->name('karir');
