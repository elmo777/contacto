<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = Role::create(['name'=>'Admin']);
        $User = Role::create(['name'=>'User']);

        Permission::create(['name' => 'todo'])->assignRole($Admin);
        Permission::create(['name' => 'leer'])->assignRole($User,$Admin);
    }
}
