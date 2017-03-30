@extends("layouts.app");

@section("content");

    <div class="container white">
    
        <h1>Editar Tipo Trabajador</h1>

            @include('tipotrabajadors.form',['tipotrabajador'=>$tipotrabajador, 'url' => '/tipotrabajadors/'.$tipohabitacion->id, 'method' => 'PATCH'])

    </div>

@endsection