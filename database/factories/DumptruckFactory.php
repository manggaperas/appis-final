<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DumptruckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bulan' => "januari",
            'tahun' => "2021",
            'volume' => 8,
            'jarak' => 12,
            'kecepatan' => 40,
            'waktu_tunggu' => 20,
            'waktu_bongkar' => 5,
            'waktu_istirahat' => 15,
            'waktu_shift' => 8,
            'sampah' => 237,
            'user_id' => 3,
        ];
    }
}
