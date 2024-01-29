<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBudidaya extends Model
{
    use HasFactory;
    protected $table = 'detail_budidaya';
    protected $primaryKey = 'id_detail_budidaya';
    public $timestamps = false;

    protected $fillable = [
        'id_tanaman',
        'id_budidaya',
    ];

    public function tahapan_budidaya()
    {
        return $this->belongsTo(TahapanBudidaya::class, 'id_budidaya', 'id_budidaya');
    }

    public function tanaman()
    {
        return $this->belongsTo(Tanaman::class, 'id_tanaman', 'id_tanaman');
    }

    public function get_budidaya($id_tanaman)
    {
        return $this->select('detail_budidaya.*', 'budidaya.tahapan_budidaya', 'budidaya.gambar as gambar_budidaya')
                    ->join('budidaya', 'detail_budidaya.id_budidaya', '=', 'budidaya.id_budidaya')
                    ->where('id_tanaman', $id_tanaman)
                    ->get();
    }

    public function get_id_detail_budidaya($id_tanaman, $id_budidaya)
    {
        return $this->where('id_tanaman', $id_tanaman)
                    ->where('id_budidaya', $id_budidaya)
                    ->first();
    }
}
