@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Tipo Trabajador</h1>
        
    </div>

    @include('tipotrabajadors.buscar')

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($tipotrabajadors as $tipotrabajador)
                <tr>
                    <td>{{$tipotrabajador->nombre}}</td>
                    <td>{{$tipotrabajador->descripcion}}</td>
                    <td>
                        <a href="{{url('/tipotrabajadors/'.$tipotrabajador->id.'/edit')}}">Editar</a>
                        @include('tipotrabajadors.delete',['tipotrabajador' => $tipotrabajador])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection