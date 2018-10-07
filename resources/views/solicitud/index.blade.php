@extends('layouts.admin1')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>
                Listado de Empleados
                <a href="solicitud/create">
                    <button class="btn btn-success">
                        Crear Nuevo
                    </button>
                </a>
            </h3>
            @include('solicitud.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th>
                        Id
                    </th>
                    <th>
                        Motivo
                    </th>
                    <th>
                        Fecha
                    </th>
                    <th>
                        Estado
                    </th>
                    <th>
                        Cliente
                    </th>
                    <th>
                        Tipo Solicitud
                    </th>
                    </thead>
                    @foreach($solicitud as $Sol)
                        <tr>
                            <td>
                                {{$Sol->id}}
                            </td>
                            <td>
                                {{$Sol->Motivo}}
                            </td>
                            <td>
                                {{$Sol->Fecha}}
                            </td>
                            <td>
                                {{$Sol->Estado}}
                            </td>
                            <td>
                                {{$Sol->Cliente}}
                            </td>
                            <td>
                                {{$Sol->TipoSolicitud}}
                            </td>
                            <td>
                                <a href="{{URL::action('SolicitudController@edit',$Sol->id)}}">
                                    <button class="btn btn-info">
                                        Editar
                                    </button>
                                </a>
                                <a data-target="#modal-delete-{{$emp->idEmpleado}}" data-toggle="modal" href="">
                                    <button class="btn btn-danger">
                                        Eliminar
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @include('empleado.personal.modal')
                    @endforeach
                </table>
            </div>
            {{$solicitud->render()}}
        </div>
    </div>


    <!-- End row -->
    <!-- end row -->
@endsection
