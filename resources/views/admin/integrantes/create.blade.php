@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    
@stop

@section('content')

    <div style="padding: 80px; ">
        <div class="container" >
            <div class="card text-center" >{{-- ,  'files' => true, 'autocomplete' => 'off' --}}
                {!! Form::open(['route' => 'integrantes.store','files' => true]) !!}
                <div class="card-header bg-primary">
                    Registro de integrantes
                </div>
                <div class="card-body ">
                    <div class="row mb-3 ">
                        <div class="justify-content-center input-group">
                            {!! Form::label('nombre', 'Nombre del integrante ' , ['class' => 'input-group-text col-3 ']) !!}
                            <div class="col-6">
                                {!! Form::text('nombre', null, ['class' => 'form-control', 'style' => 'border-radius: 4px;' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre del integrante', 'autocomplete' => 'off']) !!}
                                @error('nombre')
                                <div class="alert alert-danger mt-1" role="alert">
                                <strong>Ups!</strong>{{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="justify-content-center input-group">
                            {!! Form::label('cargo', 'Cargo de integrante ' , ['class' => 'input-group-text col-3 ']) !!}
                            <div class="col-6">
                                {!! Form::text('cargo', null, ['class' => 'form-control', 'style' => 'border-radius: 4px;' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el cargo del integrante', 'autocomplete' => 'off']) !!}
                                @error('cargo')
                                <div class="alert alert-danger mt-1" role="alert">
                                <strong>Ups!</strong>{{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="justify-content-center input-group">
                            {!! Form::label('url', 'Enlace a redes sociales' , ['class' => 'input-group-text col-3 ']) !!}
                            <div class="col-6">
                                {!! Form::text('url', null, ['class' => 'form-control pl-2', 'style' => 'border-radius: 4px;' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'El campo es opcional', 'autocomplete' => 'off']) !!}
                                @error('url')
                                <div class="alert alert-danger mt-1" role="alert">
                                <strong>Ups!</strong>{{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                       <div class="justify-content-center input-group">
                        <h6 class=" mr-2"><b>Selecciona una imagen de 400px X 400px</b> </h6>
                        {!! Form::file('file', ['class' => 'form-input-file', 'accept' => 'image/png, .jpeg, .jpg', 'id' => 'file']) !!}
                       
                        @error('file')
                            <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                       </div>
                    </div>
                    <div class="text-center">
                       
                           
                            <img id="picture" style="border-radius: 8px;" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px" alt="">
                       
                    </div>
                </div>
                <div class="card-footer">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-md btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>        
        </div>
    </div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

@section('js')
<script>
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
</script>
@stop