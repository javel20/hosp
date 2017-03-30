@extends("layouts.app");

@section("content");

    <div class="container white">
    
        <h1>Editar Local</h1>

            @include('locals.form',['local'=>$local, 'url' => '/locals/'.$tipohabitacion->id, 'method' => 'PATCH'])

    </div>

@endsection