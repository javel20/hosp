@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Nuevo Trabajador</h1>

            @include('trabajadors.form',['trabajador'=>$trabajador, 'url' => '/trabajadors', 'method' => 'POST'])    
    
    </div>

@endsection