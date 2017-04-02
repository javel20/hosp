@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Nueva Licencia</h1>

            @include('licencias.form',['licencia'=>$licencia, 'url' => '/licencias', 'method' => 'POST'])    
    
    </div>

@endsection