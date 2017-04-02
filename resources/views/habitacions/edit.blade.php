@extends("layouts.app")

@section("content")

    <div class="container white">
    
        <h1>Editar Habitacion</h1>

            @include('habitacions.form',['habitacion'=>$habitacion, 'url' => '/habitacions/'.$habitacion->id, 'method' => 'PATCH'])

    </div>

@endsection