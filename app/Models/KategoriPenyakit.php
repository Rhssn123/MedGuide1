<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPenyakit extends Model
{
    use HasFactory;

    protected $table = 'kategori_penyakits';
    protected $primaryKey = 'idkategori';
    protected $fillable = [
        'kategori',
        'nama',
    ];
}
