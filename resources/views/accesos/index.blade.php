@extends("layouts.app")

@section("content")

<div class="big-padding text-center blue-grey white-text">
    <h1>Permiso trabajadores</h1>
    
</div>

<div class="container">

    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($accesos as $acceso)
            <tr>
                <td>{{$acceso->nombre}}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection