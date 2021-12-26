<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionAndRoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'user-show',
            'user-index',
            'user-create',
            'user-edit',
            'user-delete',

            'armroll-show',
            'armroll-self-show',
            'armroll-index',
            'armroll-self-index',
            'armroll-create',
            'armroll-self-create',
            'armroll-edit',
            'armroll-self-create',
            'armroll-delete',
            'armroll-self-delete',

            'dumptruck-show',
            'dumptruck-self-show',
            'dumptruck-index',
            'dumptruck-self-index',
            'dumptruck-create',
            'dumptruck-self-create',
            'dumptruck-edit',
            'dumptruck-self-create',
            'dumptruck-delete',
            'dumptruck-self-delete',

            'container-show',
            'container-self-show',
            'container-index',
            'container-self-index',
            'container-create',
            'container-self-create',
            'container-edit',
            'container-self-create',
            'container-delete',
            'container-self-delete',

            'post-show',
            'post-self-show',
            'post-index',
            'post-self-index',
            'post-create',
            'post-self-create',
            'post-edit',
            'post-self-create',
            'post-delete',
            'post-self-delete',
        ];

        foreach ($permissions as $permission) {
            $db_permission = Permission::whereName($permission)->first();
            if(empty($db_permission)){
                Permission::create(['name' => $permission/*, 'guard_name' => 'web'*/]);
            }
        }

        $roles = [
            'sadmin',
            'admin',
            'pegawai',
            'humas',
            'pengadaan',
        ];

        foreach($roles as $role) {
            $db_roles = Role::whereName($role)->first();
            if (empty($db_roles)) {
                $created_role = Role::create(['name' => $role]);
                switch ($role) {
                    case 'sadmin':
                        (User::factory()->create([
                            'name' => 'Mr. Super Administrator',
                            'email' => 'sadmin@appis.co.id'
                        ]))->assignRole($created_role);
                        break;
                    case 'admin':
                        $created_role->syncPermissions([
                            'user-show',
                            'user-self-show',
                            'user-index',
                            'user-create',
                            'user-edit',
                            'user-self-edit',
                            'user-delete'
                        ]);
                        (User::factory()->create([
                            'name' => 'Mr. Administrator',
                            'email' => 'admin@appis.co.id'
                        ]))->assignRole($created_role);
                        break;
                    case 'pegawai':
                        $created_role->syncPermissions([
                            'armroll-show',
                            'armroll-self-show',
                            'armroll-index',
                            'armroll-self-index',
                            'armroll-create',
                            'armroll-self-create',
                            'armroll-edit',
                            'armroll-self-create',
                            'armroll-delete',
                            'armroll-self-delete',

                            'dumptruck-show',
                            'dumptruck-self-show',
                            'dumptruck-index',
                            'dumptruck-self-index',
                            'dumptruck-create',
                            'dumptruck-self-create',
                            'dumptruck-edit',
                            'dumptruck-self-create',
                            'dumptruck-delete',
                            'dumptruck-self-delete',

                            'container-show',
                            'container-self-show',
                            'container-index',
                            'container-self-index',
                            'container-create',
                            'container-self-create',
                            'container-edit',
                            'container-self-create',
                            'container-delete',
                            'container-self-delete',
                        ]);
                        (User::factory()->create([
                            'name' => 'Pegawai Satu',
                            'email' => 'pegawai@appis.co.id'
                        ]))->assignRole($created_role);
                        break;
                    case 'humas':
                        $created_role->syncPermissions([
                            'post-show',
                            'post-self-show',
                            'post-index',
                            'post-self-index',
                            'post-create',
                            'post-self-create',
                            'post-edit',
                            'post-self-create',
                            'post-delete',
                            'post-self-delete',
                        ]);
                        (User::factory()->create([
                            'name' => 'Humas',
                            'email' => 'humas@appis.co.id'
                        ]))->assignRole($created_role);
                        break;
                    case 'pengadaan':
                        $created_role->syncPermissions([
                            'armroll-show',

                            'dumptruck-show',

                            'container-show',
                        ]);
                        (User::factory()->create([
                            'name' => 'Sekretariat',
                            'email' => 'pengadaan@appis.co.id'
                        ]))->assignRole($created_role);
                        break;
                    default:
                        break;
                }
            }
        }
    }
}
