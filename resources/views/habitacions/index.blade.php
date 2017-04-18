@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Habitaciones</h1>
        
    </div>

    @include("habitacions.buscar")

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    <td>Numero</td>
                    <td>Tipo Habitacion</td>
                    <td>Vigencia</td>
                    <td>Estado</td>
                    <td>Descripcion</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($habitaciones as $habitacion)
                <tr>
                    <td>{{$habitacion->numero}}</td>
                    <td>{{$habitacion->tipohabitacion->nombre}}</td>
                    <td>{{$habitacion->vigencia}}</td>
                    <td>{{$habitacion->estado}}</td>
                    <td>{{$habitacion->descripcion}}</td>
                    <td>
                        <a href="{{url('/habitacions/'.$habitacion->id.'/edit')}}">Editar</a>
                        @include('habitacions.delete',['habitacion' => $habitacion])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <center>{{ $habitaciones->links() }}</center>

    </div>
</div>
</div>


@endsection