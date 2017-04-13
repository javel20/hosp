@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Nuevo Tipo Habitacion</h1>

            @include('tipohabitacions.form',['tipohabitacion'=>$tipohabitacion, 'url' => '/tipohabitacions', 'method' => 'POST'])    
    
    </div>

@endsection