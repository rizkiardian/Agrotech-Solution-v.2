<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeteksiHamaController extends Controller
{
    public function index()
    {
        return view('user/deteksi_hama');
    }

    public function hasil()
    {
        return view('user/hasil_deteksi');
    }
}
