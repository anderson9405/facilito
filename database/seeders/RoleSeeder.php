<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role;
        $role->name = 'Administrador';
        $role->description = 'System admin';
        $role->save();

        $role = new Role;
        $role->name = 'Vendedor';
        $role->description = 'the one who wants to sell products on the page';
        $role->save();

        $role = new Role;
        $role->name = 'Cliente';
        $role->description = 'the one who wants to buy products on the page';
        $role->save();
    }
}
