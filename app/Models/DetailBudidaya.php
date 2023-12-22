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
}
