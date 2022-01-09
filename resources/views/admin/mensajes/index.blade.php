@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Listado de mensajes</h1>
@stop

@section('content')
    <section class="col-lg-12 connectedSortable ui-sortable">
        <!-- Custom tabs (Charts with tabs) -->
        <div class="card">
            <div class="card-body table-responsive">
               {{--  @if(session('notificacion'))   
                <div class="alert alert-success" role="alert">
                <strong>Exito!</strong>{{session('notificacion')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif --}}
                <table class="table table-striped table-hover table-sm">
                    <thead class="thead-dark ">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th> Correo</th>
                            <th> Fecha de peticion</th>
                            <th>Opciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mensajes as $key=>$mensaje)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>{{$mensaje->nombre}}</td>
                                <td>{{$mensaje->telefono}}</td>
                                <td>{{$mensaje->correo}}</td>
                                <td>{{$mensaje->created_at->locale('es')->isoFormat('dddd D MMMM') }} del {{ $mensaje->created_at->locale('es')->isoFormat('YYYY') }}</td>
                                
                                <td width="10px"  class="flex justify-center">
                                    <button width="10px" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$mensaje->id}}">
                                        <i class="fas fa-eye"></i>
                                      </button>

                                      
                                        <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$mensaje->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detalles del mensaje</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <b>Nombre de la persona:</b> &nbsp;&nbsp;&nbsp;{{$mensaje->nombre}}
                                                       <hr>
                                                       <b>Telefono:</b>&nbsp;&nbsp;&nbsp;{{$mensaje->telefono}}
                                                       <hr>
                                                       <b>Correo:</b>&nbsp;&nbsp;&nbsp;{{$mensaje->correo}}
                                                       <hr>
                                                       <b>Detalle:</b>&nbsp;&nbsp;&nbsp;{{$mensaje->detalle}}
                                                    </div>
                                                    <div class="modal-footer bg-dark">
                                                        <div class="mx-auto">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                </td>
                                <td width="10px">
                                    <form action="{{route('mensajes.destroy', $mensaje)}}" method="POST" class="formulario_eliminar">
                                        @method('delete')
                                        @csrf
                                            <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center text-3xl">
                                <td colspan="7"><b>No existe registros</b> </td>
                            </tr>


                        @endforelse
                    </tbody>
                    
                </table>
                
            </div>
            <div class="footer text-center mx-auto">
                {{$mensajes->links('vendor/pagination/bootstrap-4')}}
            </div>
        </div>
        <!-- /.card -->

    </section>
@stop

 @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar')  == 'ok')
    <script>
        Swal.fire(
            'Ok!',
            'El mensaje a sido eliminado con exito',
            'success'
        )
    </script>
@endif

<script>

    $('.formulario_eliminar').submit(function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Estas seguro de querer eliminar este mensaje?',
            text: "El mensaje se eliminara permanentemente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar esto!',
            cancelButtonText: 'Cancelar'
                }).then((result) => {
                    
                if (result.isConfirmed) {

                    this.submit();

                }
        })
    })

</script>

@stop