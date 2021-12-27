<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dumptruck extends Model
{
    use HasFactory;

    protected $table = 'dumptrucks';
    protected $guarded = [];
    // protected $fillable = [];
    protected static function booted()
    {
        parent::boot();
        static::creating(function ($newDumptruck) {
            $newDumptruck->waktu_tempuh = ($newDumptruck->jarak / $newDumptruck->kecepatan) * 2;
            $newDumptruck->total_waktu_tossa = ($newDumptruck->waktu_bongkar * 10);
            $newDumptruck->waktu_angkut = ($newDumptruck->waktu_tempuh + $newDumptruck->waktu_tunggu + $newDumptruck->total_waktu_tossa + $newDumptruck->waktu_istirahat);
            $newDumptruck->ritasi = (($newDumptruck->waktu_shift * 60) / $newDumptruck->waktu_angkut);
            $newDumptruck->jumlah_dumptruck = ($newDumptruck->sampah / ($newDumptruck->ritasi * $newDumptruck->volume * 1.5));
            $newDumptruck->jumlah_pekerja = ($newDumptruck->jumlah_dumptruck * 6);
            return $newDumptruck;
        });

        static::updating(function ($newDumptruck) {
            $newDumptruck->waktu_tempuh = ($newDumptruck->jarak / $newDumptruck->kecepatan) * 2;
            $newDumptruck->total_waktu_tossa = ($newDumptruck->waktu_bongkar * 10);
            $newDumptruck->waktu_angkut = ($newDumptruck->waktu_tempuh + $newDumptruck->waktu_tunggu + $newDumptruck->total_waktu_tossa + $newDumptruck->waktu_istirahat);
            $newDumptruck->ritasi = (($newDumptruck->waktu_shift * 60) / $newDumptruck->waktu_angkut);
            $newDumptruck->jumlah_dumptruck = ($newDumptruck->sampah / ($newDumptruck->ritasi * $newDumptruck->volume * 1.5));
            $newDumptruck->jumlah_pekerja = ($newDumptruck->jumlah_dumptruck * 6);
            return $newDumptruck;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
