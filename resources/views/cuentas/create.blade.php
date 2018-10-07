@extends('layouts.admin1')

@section('content')
  {!! Form::open(array('route' => 'cuentas.store','method'=>'POST')) !!}
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="m-t-0 header-title mb-4">Registro de Cuentas</h4>

                  <div class="p-20">

                    {!! Form::open(array('route' => 'cuentas.store','method'=>'POST')) !!}
                      <form role="form" class="form-horizontal">


                          <div class="form-group row">
                              <label class="col-2 col-form-label" for="example-input-small">Numero de Cuenta</label>
                              <div class="col-sm-10">
                                          {!! Form::text('nroCuenta', null, array('placeholder' => 'Numero Cuenta','class' => 'form-control')) !!}
                              </div>
                          </div>


           <div class="form-group row">
             <label for="" class="col-sm-2 form-control-label">Interesado</label>
             <div class="col-sm-10">
               <select name="cliente" class="form-control selectpicker" id="cliente" data-live-search="true">

               @foreach ($clientes as $ac)
               <option value="{{$ac->nc}}" data-tokens=""> CI: {{$ac->cedu}}  Nombre:  {{$ac->name}}  Apellido: {{$ac->ap}} </option>

                  
               @endforeach
               </select>

             </div>
           </div>




    <!-- /.box-header -->

        <div class="form-group row">
          <label for="" class="col-sm-2 form-control-label">Tipo de Cuenta</label>
          <div class="col-sm-10">
            <select name="tipo"  class="form-control selectpicker" id="tipo" data-live-search="true">

            @foreach ($tipoC as $ac)
            <option value="{{$ac->id}}" data-tokens=""> Nombre: {{$ac->nombre}}</option>

            @endforeach
            </select>

          </div>
        </div>

    <!-- /.box-body -->


 <!-- /.row -->

        <div class="form-group row">
          <label for="" class="col-sm-2 form-control-label">Tipo de Moneda</label>
          <div class="col-sm-10">
            <select  name="moneda" class="form-control selectpicker" id="moneda" data-live-search="true">

            @foreach ($moneda as $ac)
            <option value="{{$ac->id}}" data-tokens=""> Nombre: {{$ac->nombre}}</option>

            @endforeach
            </select>

          </div>
        </div>



 <!-- /.row -->

                          <div class="form-group row">
                              <label class="col-2 col-form-label" for="example-input-large">Contraseña</label>
                              <div class="col-sm-10">

                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-2 col-form-label" for="example-input-large">Monto</label>
                              <div class="col-sm-10">

                                {!! Form::text('monto', null, array('placeholder' => 'Monto de la Cuenta','class' => 'form-control')) !!}
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
          </div> <!-- end card -->
      </div> <!-- end col -->
  </div>
@endsection
