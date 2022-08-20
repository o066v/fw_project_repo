<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionProductoSucursal extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos_sucursales'; 
    
    public function producto(){
        return $this->belongsto(Producto::class, 'producto_id');
    }

    public function sucursal(){
        return $this->belongsto(Sucursal::class, 'sucursal_id');
    }
}
