<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'id_level_user',
        'nama_user',
        'email',
        'password',
        'create_date',
        'update_date'
    ];
}
