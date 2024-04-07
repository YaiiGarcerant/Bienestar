<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class Roleseeder extends Seeder
{

    public function run()
    {
        //CREACION DE LOS ROLES
        $role1 = new Role();
        $role1->name = 'admin';
        // $role1->description = 'Administrator';
        $role1->save();
        $role2 = new Role();
        $role2->name = 'user';
        // $role2->description = 'User';
        $role2->save();
        //BUSQUEDA DEL ADMIN Y EL USER
        $admin=\App\Models\User::find(1);
        $usuario=\App\Models\User::find(2);
        //ASIGNAR EL ROL ADMIN
        // $role1 = Role::where('name', 'user')->first();
        // //obtener el rol de admin
        // if ($admin !== null && $admin->exists()) {
        // $admin->roles()->attach($role1->id);
        // }else{
        //     print($admin);
        // }

        // //ASIGNAR EL ROL USER
        // $role = Role::where('name', 'admin')->first();
        // //obtener el rol de ususario
        // if ($usuario !== null && $usuario->exists()) {
        // $usuario->roles()->attach($role->id);
        // }else{
        //     print($usuario);
        // }



    }
}
