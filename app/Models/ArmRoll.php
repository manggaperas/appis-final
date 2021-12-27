<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmRoll extends Model
{
    use HasFactory;

    protected $table = 'armrolls';
    protected $guarded = [];

    //cara lebih advance pake event
    //di dokumentasi cari aja eloquent event
    protected static function booted()
    {
        parent::boot();
        //ini nanti kolom time langsung otomatis terisi hasil perhitungan saat insert
        static::creating(function ($newArmroll) {
            // $newArmroll->waktu = ($newArmroll->jarak/$newArmroll->kecepatan)*60 + 20;
            // return $newArmroll;
            $newArmroll->waktu_perjalanan = ($newArmroll->jarak / $newArmroll->kecepatan) * 60 + 20;
            $newArmroll->jumlah_kontainer = ($newArmroll->sampah / $newArmroll->volume * 1.2);
            $newArmroll->ritasi = ($newArmroll->shift * 60) / $newArmroll->waktu_perjalanan;
            $newArmroll->jumlah_armroll = ($newArmroll->jumlah_kontainer / $newArmroll->ritasi);
            $newArmroll->jumlah_pekerja = ($newArmroll->jumlah_armroll * 2);
            // ritasi dan jumlah_armroll null di database
            // controll ke model gak nyambung
            // event
            return $newArmroll;
        });

        //tapi pas update juga harus di definisikan buat catch perubahan nilai
        static::updating(function ($newArmroll) {
            // $newArmroll->waktu = ($newArmroll->jarak/$newArmroll->kecepatan)*60 + 20;
            // return $newArmroll;
            $newArmroll->waktu_perjalanan = ($newArmroll->jarak / $newArmroll->kecepatan) * 60 + 20;
            $newArmroll->jumlah_kontainer = ($newArmroll->sampah / $newArmroll->volume * 1.2);
            $newArmroll->ritasi = ($newArmroll->shift * 60) / $newArmroll->waktu_perjalanan;
            $newArmroll->jumlah_armroll = ($newArmroll->jumlah_kontainer / $newArmroll->ritasi);
            $newArmroll->jumlah_pekerja = ($newArmroll->jumlah_armroll * 2);
            return $newArmroll;
        });
    }


    //buat attribut tambahan bisa pake accessor
    //jd di table db gak ada kolomnya tapi di response datanya jd ada
    //get{NamaKolom}Attributes itu template penamaan, nanti kolom di responsenya jd nama_kolom
    //di dokumentasi ada
    //ini harusnya setiap pake attribut time $data->time itu nilainya udah sesuai hitungan
    //keuntungannya kalo nilai kolom velo atau distance berubah, pasti hasilny sesuai rumus
    // public function getWaktuAttributes() {
    //     return (($this->jarak/$this->kecepatan)*60) + 20;
    // }


    // kalo cara biasa langsung di controller
    // tapi bisa definisiin rumusnya di model biar gampang
    // pake scope bisa
    // public function scopeAdd($query, $data) {
    //     $data['waktu'] = ($data['kecepatan']/$data['jarak'])*60 + 20;
    //     return $query->create($data);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
