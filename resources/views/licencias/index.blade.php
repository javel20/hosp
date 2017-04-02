@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Licencias</h1>
        
    </div>

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Trabajador</td>
                    <td>Fecha Inicio</td>
                    <td>Fecha Final</td>
                    <td>Estado</td>
                    <td>Descripcion</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($licencias as $licencia)
                <tr>
                    <td>{{$licencia->dni}}</td>
                    <td>{{$licencia->nombre}}</td>
                    <td>{{$licencia->trabajador->nombre}}</td>
                    <td>{{$licencia->apellidopaterno}}</td>
                    <td>{{$licencia->apellidomaterno}}</td>
                    <td>{{$licencia->direccion}}</td>
                    <td>{{$licencia->telefono}}</td>
                    <td>{{$licencia->correo}}</td>
                    <td>{{$licencia->descripcion}}</td>
                    <td>
                        <a href="{{url('/licencias/'.$licencia->id.'/edit')}}">Editar</a>
                        @include('licencias.delete',['licencia' => $licencia])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection