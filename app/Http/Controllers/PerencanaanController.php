<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;

class PerencanaanController extends Controller
{
    protected $TabelTanaman;

    public function __construct()
    {
        $this->TabelTanaman = new Tanaman();
    }

    public function index()
    {
        $tanaman = $this->TabelTanaman->all();
        return view('user/hitung_pupuk', ['tanaman' => $tanaman]);
    }

    public function hasil_pupuk(Request $request)
    {
        $validasi = $request->validate(
            [
                'pilih_tanaman' => ['required'],
                'luas_lahan' => ['required', 'numeric'],
                'nitrogen' => ['required'],
                'fosfor' => ['required'],
                'kalium' => ['required'],
            ],
            [
                'nama_tanaman.required' => 'Nama tanaman wajib diisi',
                'luas_lahan.required' => 'Luas lahan wajib diisi',
                'luas_lahan.numeric' => 'Luas lahan harus angka',
                'nitrogen.required' => 'Nitrogen wajib diisi',
                'fosfor.required' => 'Fosfor wajib diisi',
                'kalium.required' => 'Kalium wajib diisi',
            ]
        );

        if ($request->satuan_lahan == 'meter') {
            $luas_lahan = $request->luas_lahan / 10000;
        } elseif ($request->satuan_lahan == 'hektar') {
            $luas_lahan = $request->luas_lahan / 1;
        }

        $tanaman = $this->TabelTanaman->find($request->pilih_tanaman);
        $nitrogen = $request->nitrogen;
        $hitung_nitrogen = $tanaman->$nitrogen * $luas_lahan;
        $fosfor = $request->fosfor;
        $hitung_fosfor = $tanaman->$fosfor * $luas_lahan;
        $kalium = $request->kalium;
        $hitung_kalium = $tanaman->$kalium * $luas_lahan;
        
        // pupuk berisi nama pupuk, perhitungan pupuk dalam kg, jumlah karung
        $pupuk = [
            [$nitrogen, $hitung_nitrogen, $hitung_nitrogen/50],
            [$fosfor, $hitung_fosfor, $hitung_fosfor/50],
            [$kalium, $hitung_kalium, $hitung_kalium/50],
        ];

        return view('user/hasil_pupuk', ['tanaman' => $tanaman, 'pupuk' => $pupuk]);
    }
}
