<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apotek extends Model
{
    use HasFactory;

    protected $table = 'apoteks';
    protected $primaryKey = 'idkategori';
    protected $fillable = [
        'idkategori',
        'namaapotek',
        'alamat',
        'telp',
        'gambar',
    ];
}
