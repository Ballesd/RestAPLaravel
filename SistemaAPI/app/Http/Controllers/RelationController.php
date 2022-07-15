<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Producto;

class RelationController extends Controller
{
    public function index(){
        $cliente = Cliente::find(1);
        $producto = Producto::find(2);
        return view('welcome',compact('cliente','producto'));
    }
}
