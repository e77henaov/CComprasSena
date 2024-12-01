<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importamos de spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            'Ver Article',
            'Crear Article',
            'Editar Article',
            'Elimonar Article',
            //table category
            'Ver categoria',
            'Crear categoria',
            'Editar categoria',
            'Elimonar categoria',
            //table Incomedetail
            'Ver ingresoDetalle',
            'Crear ingresoDetalle',
            'Editar ingresoDetalle',
            'Elimonar ingresoDetalle',
            //table Income
            'Ver ingreso',
            'Crear ingreso',
            'Editar ingreso',
            'Elimonar ingreso',
            //table Person
            'Ver Persona',
            'Crear Persona',
            'Editar Persona',
            'Elimonar Persona',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
