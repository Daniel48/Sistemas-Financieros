@extends('layouts.admin1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 Privilegios
                </div>
                <div class="card-body">

            {!!Form::open(['route'=>'privilegios.store'])!!}

             @include('privilegios.partials.form')

            {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection
