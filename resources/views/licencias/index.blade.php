@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Licencias</h1>
        
    </div>

    @include('licencias.buscar')

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
                    <td>{{$licencia->nombre}}</td>
                    <td>{{$licencia->trabajador->nombre}}</td>
                    <td>{{$licencia->fechai}}</td>
                    <td>{{$licencia->fechaf}}</td>
                    <td>{{$licencia->estado}}</td>
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