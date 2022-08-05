<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'codigo' => 'vld01',
                'nombre' => 'sucursal valdivia',
                'ciudad' => 'valdivia',
                'telefono' => '925874169',
                'encargado' => 'Alejandro',
                'producto_id' => 3
            ],
            [
                'codigo' => 'san01',
                'nombre' => 'sucursal santiago',
                'ciudad' => 'santiago',
                'telefono' => '987459325',
                'encargado' => 'Renato',
                'producto_id' => 4
            ]
        ));
    }
}
