<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use App\Models\MengapaMemilih;

class HomeController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::first();
        $mengapaMemilih = MengapaMemilih::latest()->take(8)->get();

        // Kirim dua data sekaligus ke view
        return view('pages.home', compact('tentangKami', 'mengapaMemilih'));
    }
}