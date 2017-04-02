@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Nuevo Tipo Habitacion</h1>

            @include('tipohabitacions.form',['tipohabitacion'=>$tipohabitacion, 'url' => '/tipohabitacions', 'method' => 'POST'])    
    
    </div>

@endsection