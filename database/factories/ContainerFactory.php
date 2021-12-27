<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContainerFactory extends Factory
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
            'jenis_container' => "TD",
            'daya_tampung' => 26400,
            'kebutuhan_container' => 62,
            'sampah' => 3.71,
            'user_id' => 3,
        ];
    }
}
