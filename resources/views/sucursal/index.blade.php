@extends('layouts.admin')

@section('content')
 <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Registro de Sucursal</h3> 
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate="novalidate" />
                                        <div class="form-group ">
                                            <label for="uname" class="control-label col-lg-2">Horario de Atención </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="uname" name="name" type="text" required="" aria-required="true" />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="unamep" class="control-label col-lg-2">Teléfono </label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="unamep" name="namep" type="number" required="" aria-required="true" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group ">
                                            <label for="cdiru" class="control-label col-lg-2">Ubicación</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="cdiru" name="dir" type="text" required="" aria-required="true" />
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


                <!-- Form-validation -->
                

            </div>            @endsection
            
         