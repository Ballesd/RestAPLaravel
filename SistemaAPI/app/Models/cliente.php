<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    public function productos(){

        return $this->belongsToMany(producto::class, 'producto_clientes');
    }
}
