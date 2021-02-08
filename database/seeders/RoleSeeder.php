<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student_role = new Role();

        $student_role->rol_name = 'Estudiante';
        $student_role->save();

        $administrator_role = new Role();

        $administrator_role->role_name = 'Administrador';
        $administrator_role->save();
        
    }
}
