<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'codigo' => 'tecno',
                'nombre' => 'tecno',
                'producto_id' => 3
            ],
            [
                'codigo' => 'hogar',
                'nombre' => 'hogar',
                'producto_id' => 4
            ]
        ));
    }
}
