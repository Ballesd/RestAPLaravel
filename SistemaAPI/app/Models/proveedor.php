<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\servicio;

class proveedor extends Model
{
    protected $fillable = ['ProvId','name','apellidos','FechaNacimiento','TipoSexo'];

    public function servcio(){
        return $this->hasMany(servicio::class,'id');

    }
}
