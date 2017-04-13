@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar Local</h1>

            @include('locals.form',['local'=>$local, 'url' => '/locals/'.$local->id, 'method' => 'PATCH'])

    </div>

@endsection