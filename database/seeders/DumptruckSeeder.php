<?php

namespace Database\Seeders;

use App\Models\Dumptruck;
use Illuminate\Database\Seeder;

class DumptruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dumptruck::factory(40)->create();
    }
}
