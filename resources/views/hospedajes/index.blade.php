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
                        
                        <td>Fecha Inicio</td>
                        <td>Fecha Final</td>
                        <td>Habitacion</td>
                        <td>Precio Total</td>
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
                        <td>{{$hospedaje->cliente->nombre}} {{$hospedaje->cliente->apellidopaterno}} {{$hospedaje->cliente->apellidomaterno}}</td>
                        
                        <td>{{$hospedaje->fechai}}</td>
                        <td>{{$hospedaje->fechaf}}</td>
                        <td>{{$hospedaje->habitacion->numero}}</td>
                        <td>{{$hospedaje->preciototal}}</td>
                        <td>{{$hospedaje->trabajador->nombre}} {{$hospedaje->trabajador->apellidopaterno}} {{$hospedaje->trabajador->apellidomaterno}}</td>
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