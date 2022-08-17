<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();


        DB::table('proyectos')->insert([
            'nombre' => "proyecto prueba",
        ]);//
        
        DB::table('modulos')->insert([
            'nombre' => "modulos prueba",
            'proyecto_id' => 1
        ]);
        DB::table('tipo_modulos')->insert([
            'nombre' => "tipo modulo prueba",
        ]);

        DB::table('users')->insert([
            'name' => "alejo local",
            'email' => "ajelof2@gmail.com",
            'password' => bcrypt('laravel'),
            // 'estado'=>3,
            // 'is_admin'=>0,
        ]);

    }
}
