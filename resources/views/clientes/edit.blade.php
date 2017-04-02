@extends("layouts.app")

@section("content")

    <div class="container white">
    
        <h1>Editar Cliente</h1>

            @include('clientes.form',['cliente'=>$cliente, 'url' => '/clientes/'.$cliente->id, 'method' => 'PATCH'])

    </div>

@endsection