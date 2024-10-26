<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto_categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreProducto',
        'precioDetal',
        'precioMayor',
        'cantidad',
        'estado',
        'fecha_vencimento',
        'user_id',
    ];
}
