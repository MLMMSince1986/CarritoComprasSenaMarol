<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importamos de spatie
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
            'ver-Article',
            'crear-Article',
            'Editar-Article',
            'Eliminar-Article',
            //table category    
            'ver-Categoria',
            'crear-Categoria',
            'Editar-Categoria',
            'Eliminar-Categoria',
            //table Incomedetail   
            'ver-IngresoDetalle',
            'crear-IngresoDetalle',
            'Editar-IngresoDetalle',
            'Eliminar-IngresoDetalle',
            //table Income 
            'ver-Ingreso',
            'crear-Ingreso',
            'Editar-Ingreso',
            'Eliminar-Ingreso',
            //table Person
            'ver-Persona',
            'crear-Persona',
            'Editar-Persona',
            'Eliminar-Persona',
            //table sales
            'ver-Ventas',
            'crear-Ventas',
            'Editar-Ventas',
            'Eliminar-Ventas',
            //table sales_details
            'ver-Ventasdetalle',
            'crear-Ventasdetalle',
            'Editar-Ventasdetalle',
            'Eliminar-Ventasdetalle',

        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
