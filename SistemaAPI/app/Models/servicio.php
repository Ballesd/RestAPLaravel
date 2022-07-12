<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\proveedor;

class servicio extends Model
{
    use HasFactory;
    protected $fillable = ['FechaIngreso','Description','Price','Proveedors_id'];

    public function proov(){
        return $this->belongsTo(proveedor::class,'Proveedors_id ');

    }
}
