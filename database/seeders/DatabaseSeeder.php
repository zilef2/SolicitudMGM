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
        // proyectos
        // modulos
        // actividads
        // historia_usuarios
        // procesos
        // solicituds
        // tiposolicituds
        // parametros

        \App\Models\User::factory(3)->create();
        DB::table('proyectos')->insert([
            'nombre' => "proyectos prueba",
        ]);//
        
        DB::table('modulos')->insert([
            'nombre' => "modulos prueba",
            'proyecto_id' => 1
        ]);//
        
        DB::table('historia_usuarios')->insert([
            'nombre' => "historia_usuarios prueba",
        ]);//
        
        DB::table('procesos')->insert([
            'nombre' => "procesos prueba",
        ]);//

        DB::table('actividads')->insert([
            'nombre' => "actividads prueba",
            'historia_usuarios_id' => 1,
            'proceso_id' => 1,
            'modulo_id' => 1
        ]);//
        
        DB::table('solicituds')->insert([
            'nombre' => "solicituds prueba",
            'fecha' => "2022-12-12",
            'actividad_id' => 1,
        ]);//
        
        DB::table('tipo_solicituds')->insert([
            'nombre' => "tiposolicituds prueba",
        ]);//
        
        DB::table('parametros')->insert([
            'valor_hora' => 120000,
        ]);//

        DB::table('users')->insert([
            'name' => "alejo local",
            'email' => "ajelof2@gmail.com",
            'password' => bcrypt('laravel'),
            // 'estado'=>3,
            // 'is_admin'=>0,
        ]);

    }
}
