@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Editar Tipo Habitacion</h1>

            @include('tipohabitacions.form',['tipohabitacion'=>$tipohabitacion, 'url' => '/tipohabitacions/'.$tipohabitacion->id, 'method' => 'PATCH'])

    </div>

@endsection