@extends("layouts.app")

@section("content")

<div class="big-padding text-center blue-grey white-text">
    <h1>Clientes</h1>
    
</div>

<div class="container">

    <table class="table table-bordered">
        <thead>
            <tr>
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Direccion</td>
                <td>telefono</td>
                <td>Correo</td>
                <td>Descripcion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->dniC}}</td>
                <td>{{$cliente->nombreC}}</td>
                <td>{{$cliente->apePatC}}</td>
                <td>{{$cliente->apeMatC}}</td>
                <td>{{$cliente->direccionC}}</td>
                <td>{{$cliente->telefonoC}}</td>
                <td>{{$cliente->correoC}}</td>
                <td>{{$cliente->descripcionC}}</td>
                <td>
                    <a href="{{url('/clientes/'.$cliente->id.'/edit')}}">Editar</a>
                    @include('clientes.delete',['cliente' => $cliente])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection