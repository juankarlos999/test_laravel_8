<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

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

        $student_role->role_name = 'Estudiante';
        $student_role->save();

        $administrator_role = new Role();

        $administrator_role->role_name = 'Administrador';
        $administrator_role->save();

        $role_user = new Role();
        for($i = 1; $i <= 10; $i++){
            $role_user->users()->attach(User::all()->random()->id);
        }   
    }
}
