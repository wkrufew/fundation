<?php

namespace App\Http\Livewire;

use App\Models\Formulario;
use Livewire\Component;

class FormularioComponent extends Component
{
    public $nombre, $telefono, $correo, $asunto, $detalle;


    protected $rules = [
        'nombre'=> 'required',
        'telefono' => 'required|numeric',
        'correo' => 'required|email',
        'asunto' => 'required',
        'detalle' => 'required',
    ];

    protected $messages = [
        'nombre.required' => 'El campo nombre es requerido',
        'telefono.required' => 'El campo telefono es requerido',
        'telefono.numeric' => 'El campo telefono solo adminite numeros',
        'correo.required' => 'El campo correo es requerido',
        'correo.email' => 'El correo esta incorrecto',
        'asunto.required' => 'El campo asunto es requerido',
        'detalle.required' => 'El campo detalle es requerido',        
    ];

    public function render()
    {
        return view('livewire.formulario-component')->with('messege','Exito');
    }

    public function save()
    {
        $this->validate();
        
        Formulario::create([
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'asunto' => $this->asunto,
            'correo' => $this->correo,
            'detalle' => $this->detalle,
        ]);
    
        
        $this->reset('nombre', 'telefono', 'correo', 'asunto', 'detalle');

        session()->flash('mensaje', 'exito');
        return redirect()->to('/');
        //$this->formulario = Course::find($this->course->id);
    }
}
