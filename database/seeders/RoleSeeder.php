<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roleadmin          = Role::create(['name' => 'SuperAdmin']);        //All permits
        $roletransporter    = Role::create(['name' => 'Client']);           
        $roleclient         = Role::create(['name' => 'Employee']);       

        /*
        Permission::create(['name' => 'admin.users.destroy', 
                                       'description' => 'Delete Users'])->syncRoles([$roleadmin]);*/
    }
}
