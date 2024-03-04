<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;

class DatosCursoController extends Controller
{
    public function obtenerCursos()
    {
        $datos_curso = DatosCurso::all();
        $carrito = session()->get('carrito', []);
    
        return view('datos_curso.index', compact('datos_curso', 'carrito'));
    }
    
    public function agregarAlCarrito($id)
    {
        $curso = DatosCurso::find($id);
    
        if ($curso) {
            $carrito = session()->get('carrito', []);
            $carrito[$curso->ID_Cursos] = $curso;
            session()->put('carrito', $carrito);
        }
    
        return redirect('/obtener-cursos');
    }
    

    


    public function verCarrito()
    {
        $carrito = session()->get('carrito', []);
        return view('datos_curso.index', ['datos_curso' => DatosCurso::all(), 'carrito' => $carrito]);
    }
    


public function eliminarDelCarrito($id)
{
    $carrito = session()->get('carrito', []);
    unset($carrito[$id]);
    session()->put('carrito', $carrito);
    return redirect()->back();
}

}

