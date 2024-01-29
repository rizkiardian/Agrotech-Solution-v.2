<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTahapan extends Model
{
    use HasFactory;
    protected $table = 'detail_tahapan';
    protected $primaryKey = 'id_detail_tahapan';
    public $timestamps = false;

    protected $fillable = [
        'id_detail_budidaya',
        'judul_kegiatan',
        'waktu_pelaksanaan',
        'deskripsi_kegiatan',
        'gambar',
    ];

    public function get_tahapan($nama_kolom, $data){
        return $this->where($nama_kolom, $data)->get();
    }
}
