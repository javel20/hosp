@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Nuevo Cliente</h1>

            @include('clientes.form',['cliente'=>$cliente, 'url' => '/clientes', 'method' => 'POST'])    
    
    </div>

@endsection