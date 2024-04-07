<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // $this->call(RoleTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        // ADMINISTRADOR
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' =>bcrypt('123456789.') ,
        ]);
        //USUARIO
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@user',
            'password' =>bcrypt('1234567890.') ,
        ]);
        $this->call(RoleSeeder::class);

    }
}
