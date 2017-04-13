@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar Tipo Trabajador</h1>

            @include('tipotrabajadors.form',['tipotrabajador'=>$tipotrabajador, 'url' => '/tipotrabajadors/'.$tipotrabajador->id, 'method' => 'PATCH'])

    </div>

@endsection