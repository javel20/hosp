@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Nuevo Local</h1>

            @include('locals.form',['local'=>$local, 'url' => '/locals', 'method' => 'POST'])    
    
    </div>

@endsection