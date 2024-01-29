<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DetailTahapan;
use App\Models\DetailBudidaya;
use App\Models\TahapanBudidaya;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class KelolaTanamanController extends Controller
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

    public function tambah()
    {
        $tahapan_budidaya = $this->TabelTahapanBudidaya->all();
        return view('admin/tambah_tanaman', ['tahapan_budidaya' => $tahapan_budidaya]);
    }

    public function cobatahapan()
    {
        return view('admin/cobatahapan');
    }

    public function tambah_proses(Request $request)
    {
        dd('ok');
        // dd($$request->nama_tanaman);
        // $validasi = $request->validate(
        //     [
        //         'nama_tanaman' => ['required', 'max:255'],
        //         'gambar' => ['required', 'image'],
        //         'urea' => ['required', 'numeric'],
        //         'ZA' => ['required', 'numeric'],
        //         'TSP' => ['required', 'numeric'],
        //         'SP36' => ['required', 'numeric'],
        //         'KCL' => ['required', 'numeric'],
        //         'MOP' => ['required', 'numeric'],
        //     ],
        //     [
        //         'nama_tanaman.required' => 'Nama tanaman wajib diisi',
        //         'nama_tanaman.max' => 'Nama tanaman terlalu panjang',
        //         'gambar.required' => 'gambar wajib diisi',
        //         'gambar.image' => 'File yang anda kirim bukan gambar',
        //         'urea.required' => 'urea wajib diisi',
        //         'urea.numeric' => 'urea harus angka',
        //         'ZA.required' => 'ZA wajib diisi',
        //         'ZA.numeric' => 'ZA harus angka',
        //         'TSP.required' => 'TSP wajib diisi',
        //         'TSP.numeric' => 'TSP harus angka',
        //         'SP36.required' => 'SP36 wajib diisi',
        //         'SP36.numeric' => 'SP36 harus angka',
        //         'KCL.required' => 'KCL wajib diisi',
        //         'KCL.numeric' => 'KCL harus angka',
        //         'MOP.required' => 'MOP wajib diisi',
        //         'MOP.numeric' => 'MOP harus angka',
        //     ]
        // );

        // // pada gambar kita tampung dulu filenya
        // $gambar = $request->gambar;
        // $namaRandom = Str::random() . time();
        // $namaBaru = $namaRandom . '__gambar__' . $gambar->getClientOriginalName();
        // // $gambar->move('images', $namaBaru);

        // // Simpan semuanya ke dalam session
        // $data = [
        //     'nama_tanaman' => $request->nama_tanaman,
        //     'gambar' => $namaBaru,
        //     'urea' => $request->urea,
        //     'ZA' => $request->ZA,
        //     'TSP' => $request->TSP,
        //     'SP36' => $request->SP36,
        //     'KCL' => $request->KCL,
        //     'MOP' => $request->MOP,
        // ];
        // session()->put('tanaman', $data);

        // // Simpan file dari gambar ke dalam cache
        // $key = $namaBaru;
        // $base64 = base64_encode(file_get_contents($gambar));
        // $expirationTime = 3600; // Waktu kedaluwarsa dalam detik (contoh: 60 detik)
        // Cache::put($key, $base64, $expirationTime);

        // return redirect()->route('tanaman.tambah_tahapan');
    }

    public function tambah_tahapan()
    {
        $tahapan_budidaya = $this->TabelTahapanBudidaya->all();
        return view('admin/tambah_tahapan', ['tahapan_budidaya' => $tahapan_budidaya]);
    }

    public function tahapan_proses(Request $request)
    {
        $validasi = $request->validate(
            [
                'tahapan' => ['required'],
            ],
            [
                'tahapan.required' => 'Pilih minimal satu tahapan',
            ]
        );

        // simpan ke session
        session()->put('tahapan', $request->tahapan);
        // session untuk pindah form tahapan-tahapan
        session()->put('tahapan_ke', 0);

        return redirect()->route('tanaman.tambah_detail_tahapan');
    }

    public function tambah_detail_tahapan()
    {
        $count = session('tahapan_ke');
        $id_budidaya = session('tahapan')[$count];
        $judul_kegiatan = $this->TabelTahapanBudidaya->where('id_budidaya', $id_budidaya)->pluck('tahapan_budidaya')->first();
        return view('admin/tambah_detail_tahapan', ['judul_kegiatan' => $judul_kegiatan]);
    }

    public function detail_tahapan_proses(Request $request)
    {
        // jumlah inputan tadi disimpan ke session untuk jaga" jika validasinya error
        session()->put('jumlah_inputan', count($request->judul));

        $validasi = $request->validate(
            [
                'waktu.*' => ['required'],
                'judul.*' => ['required'],
                'gambar.*' => ['required', 'image'],
                'deskripsi.*' => ['required'],
            ],
            [
                'waktu.*.required' => 'Waktu wajib diisi',
                'judul.*.required' => 'Judul wajib diisi',
                'gambar.*.required' => 'Gambar wajib diisi',
                'gambar.*.image' => 'File yang anda kirim bukan gambar',
                'deskripsi.*.required' => 'Deskripsi wajib diisi',
            ]
        );

        // hapus session jumlah_inputan tadi karena sudah tidak diperlukan
        session()->forget('jumlah_inputan');

        // pada gambar kita tampung dulu filenya
        $gambar = $request->gambar;
        $list_namaBaru = [];
        for ($i = 0; $i < count($gambar); $i++) {
            $namaRandom = Str::random() . time();
            $namaBaru = $namaRandom . '__gambar__' . $gambar[$i]->getClientOriginalName();
            array_push($list_namaBaru, $namaBaru);
        }

        // Simpan semuanya ke dalam session
        $data = [
            'waktu' => $request->waktu,
            'judul' => $request->judul,
            'gambar' => $list_namaBaru,
            'deskripsi' => $request->waktu,
        ];
        $tahapan = session('tahapan')[session('tahapan_ke')]; //pembibitan, pemupukan, dll
        session()->put('id_tahapan_' . $tahapan, $data);

        // Simpan file dari gambar ke dalam cache
        for ($i = 0; $i < count($gambar); $i++) {
            $key = $list_namaBaru[$i];
            $base64 = base64_encode(file_get_contents($gambar[$i]));
            $expirationTime = 3600; // Waktu kedaluwarsa dalam detik (contoh: 60 detik)
            Cache::put($key, $base64, $expirationTime);
        }
        // dd(cache()->get($list_namaBaru[0]));

        $tahapan_ke = session('tahapan_ke') + 1;
        if ($tahapan_ke < count(session('tahapan'))) {
            // pindah ke tahapan selanjutnya
            session()->put('tahapan_ke', $tahapan_ke);
            return redirect()->route('tanaman.tambah_detail_tahapan');
        } else {
            // Tahap Akhir atau Submit
            // memasukkan ke tabel tanaman
            $dataTanaman = session('tanaman');
            $dataTanaman['create_date'] = now();
            $this->TabelTanaman->create($dataTanaman);
            // menyimpan gambar tanaman dari cache
            $gambar = cache()->get($dataTanaman['gambar']);
            if ($gambar) {
                $destinationPath = 'public/images/';
                $imageData = base64_decode($gambar);
                $newFilename = $dataTanaman['gambar'];
                Storage::put($destinationPath . $newFilename, $imageData);
            }

            // memasukkan ke tabel detail_budidaya
            $tanaman = $this->TabelTanaman
                ->where('create_date', $dataTanaman['create_date'])
                ->where('nama_tanaman', $dataTanaman['nama_tanaman'])
                ->first();
            for ($i = 0; $i <= session('tahapan_ke'); $i++) {
                $dataDetailBudidaya = [
                    'id_tanaman' => $tanaman->id_tanaman,
                    'id_budidaya' => session('tahapan')[$i],
                ];
                $this->TabelDetailBudidaya->create($dataDetailBudidaya);
            }

            // memasukkan ke tabel detail_tahapan
            for ($i = 0; $i <= session('tahapan_ke'); $i++) {
                $tahapan = $this->TabelDetailBudidaya
                    ->where('id_tanaman', $tanaman->id_tanaman)
                    ->where('id_budidaya', session('tahapan')[$i])
                    ->first();
                for ($j = 0; $j < count(session('id_tahapan_' . session('tahapan')[$i])['judul']); $j++) {
                    $dataDetailTahapan = [
                        'id_detail_budidaya' => $tahapan->id_detail_budidaya,
                        'judul_kegiatan' => session('id_tahapan_' . session('tahapan')[$i])['judul'][$j],
                        'waktu_pelaksanaan' => session('id_tahapan_' . session('tahapan')[$i])['waktu'][$j],
                        'gambar' => session('id_tahapan_' . session('tahapan')[$i])['gambar'][$j],
                        'deskripsi_kegiatan' => session('id_tahapan_' . session('tahapan')[$i])['deskripsi'][$j],
                    ];
                    $this->TabelDetailTahapan->create($dataDetailTahapan);
                    // menyimpan gambar tahapan dari cache
                    $gambar = cache()->get($dataDetailTahapan['gambar']);
                    if ($gambar) {
                        $destinationPath = 'public/images/';
                        $imageData = base64_decode($gambar);
                        $newFilename = $dataDetailTahapan['gambar'];
                        Storage::put($destinationPath . $newFilename, $imageData);
                    }
                }
                // hapus session id_tahapan_
                session()->forget('id_tahapan_' . session('tahapan')[$i]);
            }

            // hapus session yang sudah tidak diperlukan
            session()->forget('tahapan_ke');
            session()->forget('tahapan');
            session()->forget('tanaman');
            session()->save();

            // menghapus semua session yang sudah tidak diperlukan
            // $except = ['tanaman']; // Nama session yang ingin Anda tetapkan sebagai pengecualian
            // $allSessions = array_keys(session()->all());
            // foreach ($allSessions as $sessionKey) {
            //     if (!in_array($sessionKey, $except)) {
            //         session()->forget($sessionKey);
            //     }
            // }
            // session()->save();
            // dd(session()->all());

            return redirect()->route('tanaman.tambah');
        }
    }
}
