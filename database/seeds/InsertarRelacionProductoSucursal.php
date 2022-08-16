<?php

use Illuminate\Database\Seeder;

class InsertarRelacionProductoSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos_sucursales')->insert(array(
            [
                'producto_id' => '',
                'sucursal_id' => '',
                'cantidad' => ''
            ]
        ));
    }
}
