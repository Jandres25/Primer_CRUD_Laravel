<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $personas = [
            [
                'nombre' => 'Juan Carlos',
                'paterno' => 'Perez',
                'materno' => 'Garcia',
                'fecha_nacimiento' => '1995-03-14',
            ],
            [
                'nombre' => 'Maria Elena',
                'paterno' => 'Lopez',
                'materno' => 'Rojas',
                'fecha_nacimiento' => '1992-07-22',
            ],
            [
                'nombre' => 'Luis Alberto',
                'paterno' => 'Fernandez',
                'materno' => 'Mamani',
                'fecha_nacimiento' => '1989-11-03',
            ],
            [
                'nombre' => 'Carla Sofia',
                'paterno' => 'Sanchez',
                'materno' => 'Vargas',
                'fecha_nacimiento' => '1998-01-30',
            ],
            [
                'nombre' => 'Diego Andres',
                'paterno' => 'Torres',
                'materno' => 'Quispe',
                'fecha_nacimiento' => '1993-09-17',
            ],
        ];

        foreach ($personas as $persona) {
            DB::table('personas')->updateOrInsert(
                [
                    'nombre' => $persona['nombre'],
                    'paterno' => $persona['paterno'],
                    'materno' => $persona['materno'],
                ],
                [
                    'fecha_nacimiento' => $persona['fecha_nacimiento'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
