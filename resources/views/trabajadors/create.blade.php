@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Nuevo Trabajador</h1>

            @include('trabajadors.form',['trabajador'=>$trabajador, 'url' => '/trabajadors', 'method' => 'POST'])    
    
    </div>

@endsection