<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    /**
     * The roles that belong to the producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clientes(){
        return $this->belongsToMany(Cliente::class, 'producto_cliente');
    }
}
