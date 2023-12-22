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
        return view('user/pilih_tanaman', ['tanaman' => $tanaman]);
    }

    public function budidaya(Request $request)
    {
        $budidaya = $request->query('budidaya');
        return view($budidaya . '/' . $budidaya);
    }

    public function tahapan(Request $request)
    {
        $tanaman = $request->query('tanaman');
        $tahapan = $request->query('tahapan');
        return view($tanaman . '/' . $tahapan);
    }

    public function pemeliharaan(Request $request)
    {
        $tanaman = $request->query('tanaman');
        $tahapan = $request->query('tahapan');
        $page = $request->query('page');
        return view($tanaman . '/' . $tahapan . $page);
    }

    public function pembibitan(Request $request)
    {
        $tanaman = $request->query('tanaman');
        $tahapan = $request->query('tahapan');
        $page = $request->query('page');
        return view($tanaman . '/' . $tahapan . $page);
    }

    // public function budidaya(Request $request)
    // {
    //     $id_tanaman = $request->query('page');
    //     $tanaman = $this->TabelTanaman->find($id_tanaman);
    //     $budidaya = $this->TabelDetailBudidaya
    //         ->join('budidaya', 'detail_budidaya.id_budidaya', '=', 'budidaya.id_budidaya')
    //         ->where('detail_budidaya.id_tanaman', $id_tanaman)
    //         ->get();
    //     return view('user/budidaya', ['tanaman' => $tanaman, 'budidaya' => $budidaya]);
    // }

    // public function tahapan(Request $request)
    // {
    //     $id_detail_budidaya = $request->query('page');
    //     $budidaya = $this->TabelDetailBudidaya
    //         ->join('budidaya', 'detail_budidaya.id_budidaya', '=', 'budidaya.id_budidaya')
    //         ->where('detail_budidaya.id_detail_budidaya', $id_detail_budidaya)
    //         ->first();
    //     $tahapan = $this->TabelDetailTahapan
    //         ->join('detail_budidaya', 'detail_tahapan.id_detail_budidaya', '=', 'detail_budidaya.id_detail_budidaya')
    //         ->where('detail_tahapan.id_detail_budidaya', $id_detail_budidaya)
    //         ->get();
    //     return view('user/tahapan', ['budidaya' => $budidaya, 'tahapan' => $tahapan]);
    // }
}
