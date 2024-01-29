<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request; { {
    }
}

use App\Models\DetailTahapan;
use App\Models\DetailBudidaya;
use App\Models\TahapanBudidaya;

class TanamanController extends Controller
{
    protected $TabelTanaman;
    protected $TabelTahapanBudidaya;
    protected $TabelDetailTahapan;
    protected $TabelDetailBudidaya;

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->TabelTanaman = new Tanaman();
        $this->TabelTahapanBudidaya = new TahapanBudidaya();
        $this->TabelDetailTahapan = new DetailTahapan();
        $this->TabelDetailBudidaya = new DetailBudidaya();
    }

    public function index()
    {
        $tanaman = $this->TabelTanaman->all();
        return view('user/tanaman/tanaman', ['tanaman' => $tanaman]);
    }

    public function budidaya(Request $request)
    {
         // Ambil nilai parameter 'tanaman' dari URL
        $id_tanaman = $request->query('tanaman');
        $detail_budidaya = $this->TabelDetailBudidaya->get_budidaya($id_tanaman);
        return view('user/tanaman/detail_budidaya', ['detail_budidaya' => $detail_budidaya]);
    }

    public function tahapan(Request $request)
    {
        $id_tanaman = $request->query('tanaman');
        $id_budidaya = $request->query('budidaya');

        // cari id_detail_budidaya terlebih dahulu
        $detail_budidaya = $this->TabelDetailBudidaya->get_id_detail_budidaya($id_tanaman, $id_budidaya);
        $tahapan_budidaya_saat_ini = $detail_budidaya->tahapan_budidaya->tahapan_budidaya;
        $id_detail_budidaya = $detail_budidaya->id_detail_budidaya;

        // setelah itu ambil seluruh data dari tabel detail_tahapan
        $detail_tahapan = $this->TabelDetailTahapan->get_tahapan('id_detail_budidaya', $id_detail_budidaya);

        // ambil seluruh data dari tabel budidaya
        $tahapan_budidaya_semuanya = $this->TabelDetailBudidaya->get_budidaya($id_tanaman);

        return view('user/tanaman/detail_tahapan', ['detail_tahapan' => $detail_tahapan, 'tahapan_budidaya_saat_ini' => $tahapan_budidaya_saat_ini, 'tahapan_budidaya_semuanya' => $tahapan_budidaya_semuanya]);
    }
}
