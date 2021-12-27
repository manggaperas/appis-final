<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArmRollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jarak' => 15,
            'kecepatan' => 40,
            'istirahat' => 15,
            'muat' => 15,
            'bongkar' => 5,
            'sampah' => 236.7,
            'volume' => 6,
            'bulan' => "januari",
            'tahun' => "2021",
            'shift' => 8,
        ];
    }
}
