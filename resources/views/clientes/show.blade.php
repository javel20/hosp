@extends('layouts.app')

@section('content')

<div class="container text-center">

    <div class="">

        <h1>{{$cliente->dniC}}</h1>
            <div class="row">
                <div class="col-sm-6 col-xs-12"></div>
                <div class="col-sm-6 col-xs-12">
                    <p><strong>Descripcion</strong></p>
                    <p>{{$cliente->descripncioC}}</p>
                    <p><a href="">Agregar</a></p>
                </div>
            </div>
    </div>

</div>

@endsection