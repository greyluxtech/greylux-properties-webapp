<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         Permission::create(['name' => 'edit user']);
 
         // create roles and assign existing permissions
         $role1 = Role::create(['name' => 'developer']);
         $role1->givePermissionTo('edit user');
 
         $role2 = Role::create(['name' => 'admin']);
 
         $role3 = Role::create(['name' => 'agent']);

         $role4 = Role::create(['name' => 'user']);
         // gets all permissions via Gate::before rule; see AuthServiceProvider
 
         // create demo users
         $user = \App\Models\User::factory()->create([
            'name' => 'Developer User',
            'email' => 'developer@dev.com',
        ]);
        $user->assignRole($role1);
 
         $user = \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@admin.com',
         ]);
         $user->assignRole($role2);

         $user = \App\Models\User::factory()->create([
            'name' => 'Agent User',
            'email' => 'agent@agent.com',
        ]);
        $user->assignRole($role3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Normal User',
            'email' => 'user@user.com',
        ]);
        $user->assignRole($role4);

    }
}
