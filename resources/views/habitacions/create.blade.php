@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Nueva Habitacion</h1>

            @include('habitacions.form',['habitacion'=>$habitacion, 'url' => '/habitacions', 'method' => 'POST'])    
    
    </div>

@endsection