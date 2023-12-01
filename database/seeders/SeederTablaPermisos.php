<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //aca ponemos todo el constructor para los permisos
        $permisos = [
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla blog
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',

        ];
        foreach ($permisos as $permiso) { //añadir a la tabla
            Permission::create(['name'=>$permiso]);
        }
    }
}