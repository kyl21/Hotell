<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitaskamar extends Model
{
    use HasFactory;
    protected $table = 'fasilitaskamars';
    protected $fillable = ['tipe_kamar', 'nama_fasilitas'];
}
