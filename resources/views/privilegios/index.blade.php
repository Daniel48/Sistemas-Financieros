@extends('layouts.admin1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Privilegios

                   @can('privilegios.create')
                   <div class="pull-center">
                     <a href="{{route('privilegios.create')}}"
                      class="btn btn-success">
                       Crear
                    </a>
                   </div>

                   @endcan

                </div>

                <div class="card-body">

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th width="10px" >ID</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($permisos as $pp)
                      <tr>
                        <td>{{$pp->id}}</td>
                        <td>{{$pp->name}}</td>
                        <td>{{$pp->slug}}</td>

                      </tr>

                      @endforeach
                    </tbody>

                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
