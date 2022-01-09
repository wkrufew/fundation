@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Listado de integrantes de la fundacion</h1>
@stop

@section('content')
    @if(session('notificacion'))   
        <div class="alert alert-success" role="alert">
        <strong>Exito!&nbsp;</strong>{{session('notificacion')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <section class="col-lg-12 connectedSortable ui-sortable">
        <div class="">
            <a href="{{ route('integrantes.create') }}" class="btn btn-md btn-primary mb-2">
                <i class="fas fa-plus mr-1"></i> Crear integrante
            </a>
        </div>
        <div class="card mt-6">
            
            <div class="card-body table-responsive">

                <table class="table table-striped table-hover table-sm">
                    <thead class="thead-dark ">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>cargo</th>
                            <th>foto</th>
                            <th>Fecha de registro</th>
                            <th>Opciones</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($integrantes as $key=>$integrante)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>{{$integrante->nombre}}</td>
                                <td>{{$integrante->cargo}}</td>
                                <td><img style="border: 8px; border-color: white; border-radius: 100%" width="30" height="30" src=" {{ Storage::url($integrante->foto )}}" alt=""></td>
                                <td>{{$integrante->created_at->locale('es')->isoFormat('dddd D MMMM') }} del {{ $integrante->created_at->locale('es')->isoFormat('YYYY') }}</td>
                                
                                <td colspan="3" class="flex justify-center">
                                     
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$integrante->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark">
                                                <h5 class="modal-title" id="exampleModalLabel">Detalles del integrantes</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="text-center mt-3 mb-1">
                                                    <img style=" border-radius: 20%" width="100" src=" {{ Storage::url($integrante->foto )}}"  width="100px;" alt="">
                                                </div>
                                                <div class="modal-body">
                                                    <b>Nombre de la persona:</b> &nbsp;&nbsp;&nbsp;{{$integrante->nombre}}
                                                    <hr>
                                                    <b>Cargo:</b>&nbsp;&nbsp;&nbsp;{{$integrante->cargo}}
                                                    <hr>
                                                    <b>url:</b>&nbsp;&nbsp;&nbsp;<a href="{{$integrante->url}}" target="_blank">{{$integrante->url}}</a>
                                                </div>
                                                <div class="modal-footer bg-dark">
                                                    <div class="mx-auto">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <form action="{{route('integrantes.destroy', $integrante)}}" method="POST" class="formulario_eliminar">
                                            @method('delete')
                                            @csrf
                                            <button width="10px" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$integrante->id}}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            
                                                <a href="{{ route('integrantes.edit', $integrante) }}" class="btn btn-warning text-white btn-sm"><i class="fas fa-pen"></i> </a>
                                    
                                                <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i> </button>
                                               
                                        </form>
                                </td>
                               
                               {{--  <td width="10px">
                                    <a href="{{ route('integrantes.edit', $integrante) }}" class="btn btn-primary  btn-sm"><i class="fas fa-pen"></i> </a>
                                </td> --}}
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
                {{$integrantes->links('vendor/pagination/bootstrap-4')}}
            </div>
        </div>
        <!-- /.card -->

    </section>
@stop

{{--  @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

@section('js')
  
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar')  == 'ok')
    <script>
        Swal.fire(
            'Ok!',
            'Los datos del integrante han sido eliminados con exito',
            'success'
        )
    </script>
@endif

<script>

    $('.formulario_eliminar').submit(function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Estas seguro de querer eliminar a este integrante?',
            text: "Los datos del integrante se eliminaran permanentemente",
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