@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>Datos de la fundación</h1>
@stop

@section('content')
    @if(session('notificacion'))   
    <div class="alert alert-success" role="alert">
    <strong>Exito!</strong>{{session('notificacion')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    @foreach ($empresas as $empresa)
    <div class="card">
        <div class="card-header">
          Datos
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Empresa</span>
                    <label class="form-control" for="">{{ $empresa->nombre }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Fundador</span>
                    <label class="form-control" for="">{{ $empresa->propietario }}</label>
                </div>
                <div class="col input-group">
                   <span class="input-group-text" id="basic-addon1">@</span>
                   <label class="form-control" for="">{{ $empresa->correo }}</label>
                </div>
            </div>
          
            <div class="row mb-3">
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Telf. 1</span>
                  <label class="form-control" for="">{{ $empresa->telefono1 }}</label>
                </div>
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Telf. 2</span>
                  <label class="form-control" for="">{{ $empresa->telefono2 }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Telf. 3</span>
                    <label class="form-control" for="">{{ $empresa->telefono3 }}</label>
                  </div>
                  <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Ciudad</span>
                    <label class="form-control" for="">{{ $empresa->pais_ciudad }}</label>
                  </div>
                 
            </div>
            <div class="row mb-3">
              <div class="col input-group">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <label class="form-control" for="">{{ $empresa->direccion }}</label>
              </div>
              <div class="col input-group">
                <span class="input-group-text" id="basic-addon1">Dias L.</span>
                <label class="form-control" for="">{{ $empresa->dias }}</label>
              </div>
              <div class="col input-group">
                <span class="input-group-text" id="basic-addon1">Horas L.</span>
                <label class="form-control" for="">{{ $empresa->horas }}</label>
              </div>
              
          </div>
            <div class="row mb-3">
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Facebook</span>
                  <label class="form-control" for="">{{ $empresa->facebook }}</label>
                </div>
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Intagram</span>
                  <label class="form-control" for="">{{ $empresa->instagram }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Whatsapp</span>
                    <label class="form-control" for="">{{ $empresa->whatsapp }}</label>
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">RUC</span>
                  <label class="form-control" for="">{{ $empresa->ruc }}</label>
                </div>
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Nombre de banco</span>
                  <label class="form-control" for="">{{ $empresa->banco }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Tipo de cuenta</span>
                    <label class="form-control" for="">{{ $empresa->tipo_cuenta }}</label>
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Numero de cuenta</span>
                  <label class="form-control" for="">{{ $empresa->numero_cuenta }}</label>
                </div>
                <div class="col input-group">
                  <span class="input-group-text" id="basic-addon1">Nombre de cuenta</span>
                  <label class="form-control" for="">{{ $empresa->nombre_cuenta }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">URL</span>
                    <label class="form-control" for="">{{ $empresa->url }}</label>
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Nota</span>
                    <label class="form-control" for="">{{ $empresa->nota }}</label>
                </div>
                
            </div>
            <div class="text-center">
            
                <img style="border: 8px; border-color: black; " src=" {{ Storage::url($empresa->logo )}}"  width="100px;" alt="">
              
            </div>
         
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('empresas.edit', $empresa) }}" class="btn btn-primary">Editar Datos</a>
        </div>
    </div>
    @endforeach    
   
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop --}}