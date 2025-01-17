<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'penggunas';
    protected $primaryKey = 'idpengguna';
    protected $fillable = [
        'pengguna',
        'email',
        'password',
        'alamat',
        'telp',
        'aktif',
    ];
}
