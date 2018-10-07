@extends('layouts.admin1')

@section('content')

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Transacciones</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">General Elements</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-t-0 header-title mb-4">Input Types</h4>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">

              {!! Form::open(array('route' => 'transacciones.store','method'=>'POST')) !!}
                            <form class="form-horizontal" role="form">


                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="example-input-small">Monto</label>
                        <div class="col-sm-10">
                                    {!! Form::text('monto', null, array('placeholder' => 'Numero Cuenta','class' => 'form-control')) !!}
                        </div>
                    </div>



                                <div class="form-group row">
                                  <label for="" class="col-sm-2 form-control-label">Cuenta Origen</label>
                                  <div class="col-sm-10">
                                    <select name="cliente1" class="form-control selectpicker" id="cliente" data-live-search="true">

                                    @foreach ($cuentas as $ac)
                                    <option value="{{$ac->nc}}" data-tokens=""> Nc:  {{$ac->nc}}      cliente: {{$ac->name}} {{$ac->ap}} {{$ac->am}} </option>

                                    @endforeach
                                    </select>

                                  </div>
                                </div>



                                <div class="form-group row">
                                  <label for="" class="col-sm-2 form-control-label">Cuenta Destino</label>
                                  <div class="col-sm-10">
                                    <select name="cliente2" class="form-control selectpicker" id="cliente" data-live-search="true">

                                    @foreach ($cuentas as $ac)
                                    <option value="{{$ac->nc}}" data-tokens=""> Nc:  {{$ac->nc}}      cliente: {{$ac->name}} {{$ac->ap}} {{$ac->am}} </option>

                                    @endforeach
                                    </select>

                                  </div>
                                </div>



                                <div class="form-group row">
                                  <label for="" class="col-sm-2 form-control-label">Tipo de Moneda</label>
                                  <div class="col-sm-10">
                                    <select  name="moneda" class="form-control selectpicker" id="moneda" data-live-search="true">

                                    @foreach ($monedas as $ac)
                                    <option value="{{$ac->id}}" data-tokens=""> Nombre: {{$ac->nombre}}</option>

                                    @endforeach
                                    </select>

                                  </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>




                            </form>
                              {!! Form::close() !!}
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection
