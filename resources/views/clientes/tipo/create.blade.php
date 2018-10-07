@extends('layouts.admin1')

@section('content')
<br>


  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

@if(session('info'))

   <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
                  <h4 class="m-t-0 header-title mb-4">Registro de Tipo Cliente</h4>

                  <div class="p-20">

                    {!! Form::open(array('route' => 'tipo.store','method'=>'POST')) !!}
                      <form role="form" class="form-horizontal">


                          <div class="form-group row">
                              <label class="col-2 col-form-label" for="example-input-small">Numero de la Categoria</label>
                              <div class="col-sm-10">
                                          {!! Form::text('nombre', null, array('placeholder' => 'Nombre del tipo','class' => 'form-control')) !!}
                              </div>
                          </div>


                         <div class="form-group row">
                              <label class="col-2 col-form-label" for="example-input-small">Descripcion del tipo</label>
                              <div class="col-sm-10">
                                          {!! Form::textarea('descripcion', null, array('placeholder' => 'Nombre del tipo','class' => 'form-control')) !!}
                              </div>
                          </div>
                          

                          <a href="">
                            
                            <button class="btn btn-success">Continuar</button>
                          </a>
                      </form>
                        {!! Form::close() !!}
                  </div>
              </div>
          </div> <!-- end card -->
      </div> <!-- end col -->
  </div>
@endsection
