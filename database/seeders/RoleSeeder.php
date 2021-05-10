<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Student']);
        Role::create(['name' => 'Teacher']);

        User::create([
            'name' => 'Administrador', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('22324598'),
            'role_id' => '1'    
        ]);
    }
}
