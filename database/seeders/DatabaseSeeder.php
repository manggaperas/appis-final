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
        // $this->call(PermissionAndRoleAndUserSeeder::class);
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'Administrator',
        //     'email' => 'admin@appis.co.id',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password')
        // ]);
    }
}
