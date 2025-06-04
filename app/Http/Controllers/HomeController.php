<?php

namespace App\Http\Controllers;

use App\Models\CTA;
use App\Models\Produk;
use App\Models\Gallery;
use App\Models\Portfolio;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use App\Models\MengapaMemilih;

class HomeController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::first();
        $mengapaMemilih = MengapaMemilih::latest()->take(8)->get();
        $produk = Produk::latest()->take(4)->get();
        $portfolio = Portfolio::latest()->take(4)->get();
        $galeri = Gallery::latest()->take(3)->get();
        $client = Gallery::latest()->take(10)->get();
        $cta = CTA::latest()->first();
        // Kirim dua data sekaligus ke view
        return view('pages.home', compact('tentangKami', 'mengapaMemilih', 'produk', 'portfolio', 'galeri', 'client', 'cta'));
    }
}