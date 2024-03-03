<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;

class DatosCursoController extends Controller
{
    public function obtenerCursos()
    {
        $datos_curso = DatosCurso::all();
        return view('datos_curso.index', ['datos_curso' => $datos_curso]);
    }
}

