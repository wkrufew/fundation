<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Integrante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MiembrosController extends Controller
{
    public function index()
    {
        $integrantes = Integrante::latest('id')->paginate(10);
        return view('admin.integrantes.index', compact('integrantes'));
    }

    public function edit(Integrante $integrante)
    {
         return view('admin.integrantes.edit', compact('integrante'));
    }

    public function create()
    {
        return view('admin.integrantes.create');
    }

    public function store(Request $request)
    {
        
        $integrante = Integrante::create($request->all());
        if ($request->file('file')) {
            $url = Storage::disk('public')->put('integrantes', $request->file('file'));
            
        }
        $integrante->foto = $url;

        $integrante->save();

        $notificacion = "El integrante $request->nombre a sido registrado!";

        return redirect()->route('integrantes.index')->with(compact('notificacion'));
    }

    public function update(Request $request, Integrante $integrante)
    {
        if($request->file('file'))
        {
            $url = Storage::disk('public')->put('integrantes', $request->file('file'));

            if ($integrante->foto) {
                
                Storage::disk('public')->delete($integrante->foto);

                $integrante->foto =  $url;
            }else{
                
                $integrante->foto =  $url;
            }
        }

        $integrante->update($request->all());

        $notificacion="Los datos del integrante se han actualizado correctamente";

        return redirect()->route('integrantes.index')->with(compact('notificacion'));

    }

    public function destroy(Integrante $integrante)
    {
        Storage::disk('public')->delete($integrante->foto);

        $integrante->delete();

        return redirect()->route('integrantes.index')->with('eliminar', 'ok');
    }
}
