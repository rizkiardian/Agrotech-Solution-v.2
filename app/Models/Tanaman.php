<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    protected $table = 'tanaman';
    protected $primaryKey = 'id_tanaman';
    public $timestamps = false;

    protected $fillable = [
        'nama_tanaman',
        'gambar',
        'urea',
        'ZA',
        'TSP',
        'SP36',
        'KCL',
        'MOP',
        'create_date',
        'update_date'
    ];
}
