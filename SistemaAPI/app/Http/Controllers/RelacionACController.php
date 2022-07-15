<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Materia;


class RelacionACController extends Controller
{
    public function index(){
        $alumno = Alumno::find(1);
        $materia = Materia::find(2);
        return view('welcome',compact('alumno','materia'));
    }

    public function API()
    {
        $alumno = Alumno::find(1);
        $materia = Materia::find(2);
        return compact('alumno','materia');

    }
}
