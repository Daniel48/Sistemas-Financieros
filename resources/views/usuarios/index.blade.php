@extends('layouts.admin1')

@section('content')
 <div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title">Registro de Usuario</h3>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Datos Personales</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate" />
                                        <div class="form-group ">
                                            <label for="uname" class="control-label col-lg-2">Nombre </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="uname" name="name" type="text" required="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="unamep" class="control-label col-lg-2">Apellido Paterno </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="unamep" name="namep" type="text" required="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="unamem" class="control-label col-lg-2">Apellido Materno </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="unamem" name="namem" type="text" required="" aria-required="true" />
                                            </div>
                                        </div>
                                          <div class="form-group ">
                                            <label for="cciu" class="control-label col-lg-2">Cedula de Identidad </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="cciu" name="ci" type="number" required="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cdiru" class="control-label col-lg-2">Direccion</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="cdiru" name="dir" type="text" required="" aria-required="true" />
                                            </div>
                                        </div>
                                         <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Email (opcional)</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="cemail" name="dir" type="email"  />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cfnu" class="control-label col-lg-2">Fecha de Nacimiento</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="cfnu" name="fn" type="date" required="" aria-required="true" />
                                            </div>
                                        </div>

                                        </div>
                                    </form>
                                </div> <!-- .form -->
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->


                <!-- Form-validation -->
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Datos de Usuario</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate" />

                                        <div class="form-group ">
                                            <label for="usernameu" class="control-label col-lg-2">Usuario *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="usernameu" name="usernamec" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="passwordu" class="control-label col-lg-2">Contraseña *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="passwordu" name="passwordc" type="password" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="confirm_password" class="control-label col-lg-2">Confirmar Contraseña *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success" type="submit">Guardar</button>
                                                <button class="btn btn-default" type="button">Cancelar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->


            </div>            @endsection
