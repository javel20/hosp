{!!Form::open(['url' => $url, 'method' => $method])!!}

            <div class="form-group">
                {{ Form::text('dniC',$cliente->dniC,['class' => 'form-control', 'placeholder'=>'DNI']) }}
            </div>

            <div class="form-group">
                {{Form::text('nombreC',$cliente->nombreC,['class' => 'form-control', 'placeholder'=>'Nombres'])}}
            </div>

            <div class="form-group">
                {{Form::text('apePatC',$cliente->apePatC,['class' => 'form-control', 'placeholder'=>'Apellido Paterno'])}}
            </div>

            <div class="form-group">
                {{Form::text('apeMatC',$cliente->apeMatC,['class' => 'form-control', 'placeholder'=>'Apellido Materno'])}}
            </div>

            <div class="form-group">
                {{Form::text('direccionC',$cliente->direccionC,['class' => 'form-control', 'placeholder'=>'Direccion'])}}
            </div>

            <div class="form-group">
                {{Form::text('telefonoC',$cliente->telefonoC,['class' => 'form-control', 'placeholder'=>'Telefono'])}}
            </div>

            <div class="form-group">
                {{Form::text('correoC',$cliente->correoC,['class' => 'form-control', 'placeholder'=>'Correo'])}}
            </div>

            <div class="form-group">
                {{Form::text('descripcionC',$cliente->descripcionC,['class' => 'form-control', 'placeholder'=>'Descripcion'])}}
            </div>

            <div class="form-group text-right">
                <a href="{{url('/clientes')}}">Regresar al listado de productos</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}