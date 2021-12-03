<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [

             //Operaciones sobre tabla usuarios
             'ver-usuario',
             'crear-usuario',
             'editar-usuario',
             'borrar-usuario',

            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',

            //Operacions sobre tabla conductor
            'ver-conductor',
            'crear-conductor',
            'editar-conductor',
            'borrar-conductor',

            //Operacions sobre tabla grifo
            'ver-grifo',
            'crear-grifo',
            'editar-grifo',
            'borrar-grifo',

            //Operacions sobre tabla planta
            'ver-planta',
            'crear-planta',
            'editar-planta',
            'borrar-planta',

            //Operacions sobre tabla tipocombustible
            'ver-tipocombustible',
            'crear-tipocombustible',
            'editar-tipocombustible',
            'borrar-tipocombustible',

            //Operacions sobre tabla vehiculo
            'ver-vehiculo',
            'crear-vehiculo',
            'editar-vehiculo',
            'borrar-vehiculo',

            //Operacions sobre tabla viaje
            'ver-viaje',
            'crear-viaje',
            'editar-viaje',
            'borrar-viaje',

            //Operacions sobre tabla combustibles
            'ver-combustible',
            'crear-combustible',
            'editar-combustible',
            'borrar-combustible'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}