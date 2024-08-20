<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Administrador'],
            ['name' => 'Gerente de Proyecto'],
            ['name' => 'Líder de Equipo'],
            ['name' => 'Miembro del Equipo'],
            ['name' => 'Stakeholder'],
            ['name' => 'Cliente'],
        ];

        DB::table('roles')->insert($roles);
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'role_id' => 1
            ]
        );
    }
}
