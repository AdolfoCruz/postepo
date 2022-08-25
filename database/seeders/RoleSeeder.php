<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleDeveloper     = Role::create(['name' => 'developer']);
        $roleSuperadmin    = Role::create(['name' => 'superadmin']);
        $roleGuest         = Role::create(['name' => 'employee']);
        $roleProvider      = Role::create(['name' => 'provider']);
        $roleGuest         = Role::create(['name' => 'client']);
        $roleGuest         = Role::create(['name' => 'guest']);
    }
}
