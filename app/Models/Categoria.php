<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categorias';

    public function producto(){
	    return $this->hasMany(Producto::class, 'producto_id');
    }

}