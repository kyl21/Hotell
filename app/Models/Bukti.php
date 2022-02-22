<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Bukti extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    protected $fillable = ['nama_pemesan', 'email', 'no_hp', 'nama_tamu', 'tipe_kamar', 'jumlah_kamar', 'tgl_check_in', 'tgl_check_out', 'created_at'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d-m-Y');
    }

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
