@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
@stop

@section('content')
    <p>Datos para actualizar</p>
    <div class="card">
        <div class="card-header justify-between flex-row">
          Datos  <div style="float: right" class="text-purple-600" class="flex"><a href="https://crear.wa.link/" target="_blank">Generar enlace personalizado de whatsapp</a></div>
        </div>
        <div class="card-body">
          {!! Form::model($empresa, ['route' => ['empresas.update',$empresa], 'method' => 'put', 'files' => true, 'autocomplete' => 'off']) !!}
            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('nombre', 'Nombre de la empresa ' , ['class' => 'input-group-text']) !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre de la empresa', 'autocomplete' => 'off']) !!}
                    @error('nombre')
                        <div class="alert alert-danger mt-1" role="alert">
                        <strong>Ups!</strong>{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('propietario', 'Propietario' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('propietario', null, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el nombre del propietario', 'autocomplete' => 'off']) !!}
                  @error('propietario')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('correo', '@ ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('correo', null, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Escriba el correo de la empresa', 'autocomplete' => 'off']) !!}
                  @error('correo')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
            </div>
          
            <div class="row mb-3">
                <div class="col input-group">
                  {!! Form::label('telefono1', 'Telf. 1 ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('telefono1', null, ['class' => 'form-control' . ($errors->has('telefono1') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese un numero de telefono', 'autocomplete' => 'off']) !!}
                  @error('telefono1')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('telefono2', 'Telf. 2' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('telefono2', null, ['class' => 'form-control' . ($errors->has('telefono2') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese un numero de telefono', 'autocomplete' => 'off']) !!}
                  @error('telefono2')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('telefono3', 'Telf. 3' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('telefono3', null, ['class' => 'form-control' . ($errors->has('telefono3') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese un numero de telefono', 'autocomplete' => 'off']) !!}
                  @error('telefono3')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                  </div>
                  <div class="col input-group">
                    {!! Form::label('pais_ciudad', 'Pais - Ciudad ' , ['class' => 'input-group-text']) !!}
                    {!! Form::text('pais_ciudad', null, ['class' => 'form-control' . ($errors->has('pais_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el nombre del pais', 'autocomplete' => 'off']) !!}
                    @error('pais_ciudad')
                        <div class="alert alert-danger mt-1" role="alert">
                        <strong>Ups!</strong>{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                    </div>
                  
            </div>
            {{-- dias y horas --}}
            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('direccion', 'Direccion ' , ['class' => 'input-group-text']) !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la direccion de la empresa', 'autocomplete' => 'off']) !!}
                    @error('direccion')
                        <div class="alert alert-danger mt-1" role="alert">
                        <strong>Ups!</strong>{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                  </div>
                <div class="col input-group">
                  {!! Form::label('dias', 'Dias L.' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('dias', null, ['class' => 'form-control' . ($errors->has('dias') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese los dias laborales', 'autocomplete' => 'off']) !!}
                  @error('dias')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('horas', 'Horas ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('horas', null, ['class' => 'form-control' . ($errors->has('horas') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese las horas laborales', 'autocomplete' => 'off']) !!}
                  @error('horas')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                  </div>
                 
            </div>
            {{-- fin de dias y horas --}}
            <div class="row mb-3">
                <div class="col input-group">
                  {!! Form::label('facebook', 'Facebook ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('facebook', null, ['class' => 'form-control' . ($errors->has('facebook') ? ' is-invalid' : ''), 'placeholder' => 'Link de facebook', 'autocomplete' => 'off']) !!}
                  @error('facebook')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('instagram', 'Instagram ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('instagram', null, ['class' => 'form-control' . ($errors->has('instagram') ? ' is-invalid' : ''), 'placeholder' => 'Link de instagram', 'autocomplete' => 'off']) !!}
                  @error('instagram')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('whatsapp', 'Whatsapp ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('whatsapp', null, ['class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Link de whatsapp', 'autocomplete' => 'off']) !!}
                  @error('whatsapp')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                  </div>
            </div>

            {{-- RUC BANCO TIPO de cuenta  --}}
            <div class="row mb-3">
                <div class="col input-group">
                  {!! Form::label('ruc', 'R.U.C ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('ruc', null, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el R.U.C.', 'autocomplete' => 'off']) !!}
                  @error('ruc')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('banco', 'Nombre de Banco ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('banco', null, ['class' => 'form-control' . ($errors->has('banco') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del banco', 'autocomplete' => 'off']) !!}
                  @error('banco')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('tipo_cuenta', 'Tipo de cuenta ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('tipo_cuenta', null, ['class' => 'form-control' . ($errors->has('tipo_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de cuenta', 'autocomplete' => 'off']) !!}
                  @error('tipo_cuenta')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                  </div>
            </div>

            {{-- NUMERO DE CUENTA NOMBRE DE CUENTA URL --}}
            <div class="row mb-3">
                <div class="col input-group">
                  {!! Form::label('numero_cuenta', 'Numero de cuenta' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('numero_cuenta', null, ['class' => 'form-control' . ($errors->has('numero_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese numero de cuenta', 'autocomplete' => 'off']) !!}
                  @error('numero_cuenta')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('nombre_cuenta', 'Nombre de cuenta ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('nombre_cuenta', null, ['class' => 'form-control' . ($errors->has('nombre_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre de la cuenta', 'autocomplete' => 'off']) !!}
                  @error('nombre_cuenta')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  {!! Form::label('url', 'Url ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('url', null, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Link de la pagina asociada', 'autocomplete' => 'off']) !!}
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

            <div class="row mb-3">
                <div class="col input-group">
                  {!! Form::label('nota', 'Nota ' , ['class' => 'input-group-text']) !!}
                  {!! Form::text('nota', null, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese una nota', 'autocomplete' => 'off']) !!}
                  @error('nota')
                      <div class="alert alert-danger mt-1" role="alert">
                      <strong>Ups!</strong>{{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @enderror
                </div>
                <div class="col input-group">
                  <p class=""><b>Selecciona una imagen</b> </p>
                  {!! Form::file('file', ['class' => 'form-input', 'accept' => 'image/png, .jpeg, .jpg', 'id' => 'file']) !!}
                 
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
                    @if ($empresa->logo)
                        <img id="picture" style="border-radius: 8px;" src="{{Storage::url($empresa->logo)}}" width="100px" alt="">
                    @else
                        <img id="picture" style="border-radius: 8px;" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px" alt="">
                    @endif
                </div>
            </div>
            <div class="card-footer text-center">
              {!! Form::submit('Guardar cambios', ['class' => ' btn btn-primary mt-2']) !!}
            </div>
          {!! Form::close() !!}
        </div>
        
    </div>
    
   
@stop



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