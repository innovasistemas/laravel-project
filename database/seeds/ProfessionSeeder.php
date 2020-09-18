<?php

use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
//        DB::table('professions')->truncate();
        
        DB::table('professions')->insert([
            'description' => 'Desarrollador back-end',
//            'password' => bcrypt('laravel')
        ]);
        
        DB::table('professions')->insert([
            'description' => 'Desarrollador front-end',
        ]);
        
        DB::table('professions')->insert([
            'description' => 'Diseñador',
        ]);
        
        DB::insert('INSERT INTO professions (description) VALUES ("Maquetador")');
        
        DB::insert('INSERT INTO professions (description) VALUES (?)', ['Arquitecto']);
        
//      Previene de ataques de inyección de SQL puesto que los parámetros dinámicos serán 
//      escapados de forma automática y segura
        DB::insert('INSERT INTO professions (description, created_at) 
                    VALUES (:description, :created_at)',
                    ['description' => 'Administrador BD', 'created_at' => now()]); 
        
        
//        Método select
//        DB::select('SELECT id FROM professions WHERE description = ?', ['Desarrollador back-end']);
//        $professions = DB::table('professions')->select('id')->take(1)->get();
//        $professions->first(); // en vez de $professions[0]
//        $profession = DB::table('professions')->select('id')->where('description', '=', 'Desarrollador back-end')->first();
//        $profession = DB::table('professions')->select('id')->where(['description' => 'Desarrollador back-end'])
//        $profession = DB::table('professions')->whereDescription('Desarrollador back-end')->first();//Método dinámico

    }
}
