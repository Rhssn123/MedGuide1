<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayats';
    protected $primaryKey = 'idpengguna';
    protected $fillable = [
        'idpengguna',
        'idobat',
        'kategoriobat',
        'nama',
        'stok',
    ];
}
