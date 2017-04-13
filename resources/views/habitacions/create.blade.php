@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Nueva Habitacion</h1>

            @include('habitacions.form',['habitacion'=>$habitacion, 'url' => '/habitacions', 'method' => 'POST'])    
    
    </div>

@endsection