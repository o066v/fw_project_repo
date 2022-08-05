<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'codigo' => 'celr1',
                'nombre' => 'celular rojo',
                'descripcion' => 'es un celular de color rojo',
                'cantidad' => '30',
                'precio' => '65000'
            ],
            [
                'codigo' => 'sil01',
                'nombre' => 'silla comoda',
                'descripcion' => 'es una silla muy comoda',
                'cantidad' => '10',
                'precio' => '25000'
            ]
        ));

        
    }
}
