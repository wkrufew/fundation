<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('admin.index', compact('empresas'));
    }

    public function edit(Empresa $empresa)
    {
        //dd($empresa);
         return view('admin.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {
       
        if($request->file('file'))
        {
            $url = Storage::disk('public')->put('empresas', $request->file('file'));

            if ($empresa->logo) {
                
                Storage::disk('public')->delete($empresa->logo);

                $empresa->logo =  $url;
            }else{
                
                $empresa->logo =  $url;
            }
        }

        $empresa->update($request->all());

        $notificacion="Los datos de la empresa se han actualizado correctamente";

        return redirect('/admin/empresas')->with(compact('notificacion'));
    }
}
