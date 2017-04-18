@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Hospedaje</h1>
        
    </div>

    @include('hospedajes.buscar')

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>codigo</td>
                    <td>Cliente</td>
                    <td>Trabajador</td>
                    <td>Fecha Inicio</td>
                    <td>Fecha Final</td>
                    <td>Tipo habitacion</td>
                    <td>habitacion</td>
                    <td>Costo</td>
                    <td>Registrador</td>
                    <td>Estado</td>
                    <td>Descripcion</td>

                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($hospedajes as $hospedaje)
                <tr>
                    <td>{{$hospedaje->codigo}}</td>
                    <td>{{$hospedaje->cliente->nombre}}</td>
                    <td>{{$hospedaje->fechai}}</td>
                    <td>{{$hospedaje->fechaf}}</td>
                    <td>{{$hospedaje->tipohabitacion->nombre}}</td>
                    <td>{{$hospedaje->habitacion->numero}}</td>
                    <td>{{$hospedaje->costo}}</td>
                    <td>{{$hospedaje->trabajador->nombre}}</td>
                    <td>{{$hospedaje->estado}}</td>
                    <td>{{$hospedaje->descripcion}}</td>
                    <td>
                        <a href="{{url('/hospedajes/'.$hospedaje->id.'/edit')}}">Editar</a>
                        @include('hospedajes.delete',['hospedaje' => $hospedaje])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection