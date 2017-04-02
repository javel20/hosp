@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Editar Tipo Trabajador</h1>

            @include('tipotrabajadors.form',['tipotrabajador'=>$tipotrabajador, 'url' => '/tipotrabajadors/'.$tipotrabajador->id, 'method' => 'PATCH'])

    </div>

@endsection