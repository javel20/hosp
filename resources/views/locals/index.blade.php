@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
        <h1>Local</h1>
        
    </div>

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Telefono</td>
                    <td>Estado</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($locals as $local)
                <tr>
                    <td>{{$local->nombre}}</td>
                    <td>{{$local->direccion}}</td>
                    <td>{{$local->telefono}}</td>
                    <td>{{$local->estado}}</td>
                    <td>
                        <a href="{{url('/locals/'.$local->id.'/edit')}}">Editar</a>
                        @include('locals.delete',['local' => $local])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection