@extends("layouts.app")

@section("content")

    <div class="container white">
    
        <h1>Nuevo Tipo Trabajador</h1>

            @include('tipotrabajadors.form',['tipotrabajador'=>$tipotrabajador, 'url' => '/tipotrabajadors', 'method' => 'POST'])    
    
    </div>

@endsection