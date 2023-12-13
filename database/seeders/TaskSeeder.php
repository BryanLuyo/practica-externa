<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = [
            [
                'title' => 'Ajustes en el App Task',
                'description' => 'Los ajustes de la app Task estan incompletas, se tiene que terminar de insertar aun',
                'dni' => '78098846',
                'due_date' => '2023-12-13'
            ],
            [
                'title' => 'Eliminar registro en el App Task',
                'description' => 'se debe eliminar los registros que no se utlizan',
                'dni' => '78098846',
                'due_date' => '2023-12-13'
            ],
        ];

        DB::table('task')->insert($task);
    }
}
