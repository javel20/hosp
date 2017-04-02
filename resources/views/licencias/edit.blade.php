@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Editar Licencias</h1>

            @include('licencias.form',['licencia'=>$licencia, 'url' => '/licencias/'.$licencia->id, 'method' => 'PATCH'])

    </div>

@endsection