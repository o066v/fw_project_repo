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
            ],
            [
                'codigo' => 'hogar',
                'nombre' => 'hogar',
            ]
        ));
    }
}
