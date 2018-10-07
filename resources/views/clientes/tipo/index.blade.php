@extends('layouts.admin1')

@section('content')
<br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="m-t-0 header-title mb-4">Tipos de Clientes</h4>
                                               
                                                <a class="btn btn" href="{{route('tipo.create')}}">
                                                    
                                                    <button class="btn btn-info">Registrar Nuevo</button>
                                                </a>


                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                            
                                                <th>ID</th>
                                                <th>Nombre de la Categoria</th>
                                                <th>Descripcion</th>
                                                 <th>Accion</th>
                                            </tr>
                                            </thead>
                                            @foreach($tipos as $tip)
                                            <tbody>
                                            <tr>
                                        
                                                <td>{{$tip->id}}</td>
                                                <td>{{$tip->Categoria}}</td>
                                                <td>{{$tip->descripcion}}</td>
                                                <td>    

                                                <a>
                                                    
                                                    <button class="btn btn-info">Editar</button>
                                                </a>

                                                </td>
                                            </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </div>

@endsection