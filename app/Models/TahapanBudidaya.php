<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahapanBudidaya extends Model
{
    use HasFactory;
    protected $table = 'budidaya';
    protected $primaryKey = 'id_budidaya';
    public $timestamps = false;

    protected $fillable = [
        'tahapan_budidaya',
    ];
}
