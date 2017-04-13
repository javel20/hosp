@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Nuevo Local</h1>

            @include('locals.form',['local'=>$local, 'url' => '/locals', 'method' => 'POST'])    
    
    </div>

@endsection