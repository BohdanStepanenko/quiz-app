<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'view_not_completed']);
        $permission->assignRole($role_admin);

        $admin = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make(12344321),
        ]);
        $admin->assignRole('admin');
    }
}
