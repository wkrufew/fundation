<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        $mensajes = Formulario::latest('id')->paginate(10);
        return view('admin.mensajes.index', compact('mensajes'));
    }

    public function destroy(Formulario $mensaje)
    {
        $mensaje->delete();

        $notificacion = "El mensaje de $mensaje->nombre a sido eliminado con exito";

        return redirect()->route('mensajes.index')->with('eliminar', 'ok');
    }
}
