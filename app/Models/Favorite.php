<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

        protected $table = 'favorites';

        // Nonaktifkan auto-incrementing dan primary key
        public $incrementing = false;
        protected $primaryKey = null;
    
        // Izinkan mass assignment untuk kolom-kolom berikut
        protected $fillable = ['idkategori', 'idpengguna', 'nama', 'price'];

        
}
