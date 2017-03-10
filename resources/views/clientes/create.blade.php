@extends("layouts.app");

@section("content");

    <div class="container white">
    
        <h1>Nuevo Cliente</h1>

        {!!Form::open(['url' => '/clientes', 'method' => 'POST'])!!}

            <div class="form-group">
                {{ Form::text('dniC','',['class' => 'form-control', 'placeholder'=>'DNI']) }}
            </div>

            <div class="form-group">
                {{Form::text('nombreC','',['class' => 'form-control', 'placeholder'=>'Nombres'])}}
            </div>

            <div class="form-group">
                {{Form::text('apePatC','',['class' => 'form-control', 'placeholder'=>'Apellido Paterno'])}}
            </div>

            <div class="form-group">
                {{Form::text('apeMatC','',['class' => 'form-control', 'placeholder'=>'Apellido Materno'])}}
            </div>

            <div class="form-group">
                {{Form::text('direccionC','',['class' => 'form-control', 'placeholder'=>'Direccion'])}}
            </div>

            <div class="form-group">
                {{Form::text('telefonoC','',['class' => 'form-control', 'placeholder'=>'Telefono'])}}
            </div>

            <div class="form-group">
                {{Form::text('correoC','',['class' => 'form-control', 'placeholder'=>'Correo'])}}
            </div>

            <div class="form-group">
                {{Form::text('descripcionC','',['class' => 'form-control', 'placeholder'=>'Descripcion'])}}
            </div>

            <div class="form-group text-right">
                <a href="{{url('/clientes')}}">Regresar al listado de productos</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}
    </div>

@endsection