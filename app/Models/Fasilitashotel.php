<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitashotel extends Model
{
    use HasFactory;
    protected $table = 'fasilitass';
    protected $fillable = ['nama_fasilitas', 'keterangan', 'image'];
}
