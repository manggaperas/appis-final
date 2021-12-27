<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleAndPermission::class);
        $this->call(ArmrollSeeder::class);
        $this->call(ContainerSeeder::class);
        $this->call(DumptruckSeeder::class);
    }
}
