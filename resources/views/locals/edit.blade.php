@extends("layouts.app")

@section("content")

    <div class="">
    
        <h1>Editar Local</h1>

            @include('locals.form',['local'=>$local, 'url' => '/locals/'.$local->id, 'method' => 'PATCH'])

    </div>

@endsection