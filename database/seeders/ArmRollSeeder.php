<?php

namespace Database\Seeders;

use App\Models\ArmRoll;
use Illuminate\Database\Seeder;

class ArmrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArmRoll::factory(40)->create();
    }
}
