@extends('layouts.admin1')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 header-title mb-4">Registro de CLientes 10</h4>
                    {!! Form::open(array('route' => 'clientes.store','method'=>'POST')) !!}
                    <form>
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                       value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div id="mainForm" name="mainForm" class="form-group">
                                <label>
                                    Persona
                                    <input type="checkbox" id="persona" name="persona" onclick="clickpersona()"
                                           value="persona" class="flat-red">
                                </label>
                                <label>
                                    Grupo
                                    <input type="checkbox" id="grupo" name="grupo" onclick="clickrgrupo()" value="grupo"
                                           class="flat-red">
                                </label>
                                <label>
                                    Empresa
                                    <input type="checkbox" id="empresa" name="empresa" onclick="clickempresa()"
                                           value="empresa" class="flat-red">
                                </label>
                            </div>
                        </div>

                        <div id="formulariopersona">
                            <div class="form-group col-md-5">
                                <label for="inputPassword4" class="col-form-label">Cedula Identidad</label>
                                {!! Form::text('ci', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Nombres</label>
                                {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Apellido Paterno</label>
                                {!! Form::text('p', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Apellido Materno</label>
                                {!! Form::text('m', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Apellido Materno</label>
                                {!! Form::text('direccion', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" id="fechaCreate">
                                    <strong>Fecha de Nacimiento:</strong>
                                    {!! Form::date('fecha', \Carbon\Carbon::now()) !!}
                                </div>
                            </div>

                            <div class="col-lg-4 col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Sexo:</strong>
                                    <select name="sexo" class="form-control">
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                </div>
                            </div>


                        </div>


                        <div id="formulariogrupo">


                        </div>

                        <div id="formularioempresa">

                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">NIT</label>
                                {!! Form::text('nit', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Razon Social</label>
                                {!! Form::text('razon', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Telefono</label>
                                {!! Form::text('telefono', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Pagina web</label>
                                {!! Form::text('pagina', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Ubicacion</label>
                                {!! Form::text('direccion', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                            </div>


                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- End row -->
    <!-- end row -->
@endsection
