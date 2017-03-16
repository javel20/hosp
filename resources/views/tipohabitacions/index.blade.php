@extends("layouts.app")

@section("content")

<div class="big-padding text-center blue-grey white-text">
    <h1>Clientes</h1>
    
</div>

<div class="container">

    <table class="table table-bordered">
        <thead>
            <tr>

                <td>Nombre</td>
                <td>Precio</td>
                <td>Descripcion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($tipohabitacions as $tipohabitacion)
            <tr>
                <td>{{$tipohabitacion->nombreTH}}</td>
                <td>{{$tipohabitacion->precioTH}}</td>
                <td>{{$tipohabitacion->descripcionTH}}</td>
                <td>
                    <a href="{{url('/tipohabitacions/'.$tipohabitacion->idTH.'/edit')}}">Editar</a>
                    @include('tipohabitacions.delete',['tipohabitacion' => $tipohabitacion])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection