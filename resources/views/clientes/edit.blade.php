@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar Cliente</h1>

            @include('clientes.form',['cliente'=>$cliente, 'url' => '/clientes/'.$cliente->id, 'method' => 'PATCH'])

    </div>

@endsection