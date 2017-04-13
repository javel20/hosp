@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Nuevo Cliente</h1>

            @include('clientes.form',['cliente'=>$cliente, 'url' => '/clientes', 'method' => 'POST'])    
    
    </div>

@endsection