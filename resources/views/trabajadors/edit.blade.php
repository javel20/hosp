@extends("layouts.app");

@section("content");

    <div class="container white">
    
        <h1>Editar Trabajador</h1>

            @include('trabajadors.form',['trabajador'=>$trabajador, 'url' => '/trabajadors/'.$trabajador->id, 'method' => 'PATCH'])

    </div>

@endsection