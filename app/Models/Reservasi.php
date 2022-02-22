<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    protected $fillable = ['nama_tamu', 'tgl_check_in', 'tgl_check_out'];

    public function getTglCheckInAttribute()
    {
        return Carbon::parse($this->attributes['tgl_check_in'])
            ->translatedFormat('d-m-Y');
    }
    public function getTglCheckOutAttribute()
    {
        return Carbon::parse($this->attributes['tgl_check_out'])
            ->translatedFormat('d-m-Y');
    }

}
