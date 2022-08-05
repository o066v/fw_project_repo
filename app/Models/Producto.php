<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos'; 

    public function sucursal(){
        return $this->belongsto(Sucursal::class, 'sucursal_id');
    }
    
    public function categoria(){
        return $this->belongsto(Categoria::class, 'categoria_id');
    }
}