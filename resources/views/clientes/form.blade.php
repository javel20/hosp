{!!Form::open(['url' => $url, 'method' => $method])!!}

            <div class="form-group col-md-6">
            <label>DNI:</label>
                {{ Form::text('dniC',$cliente->dniC,['class' => 'form-control', 'placeholder'=>'DNI','maxlength'=>'8']) }}
            </div>

            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombreC',$cliente->nombreC,['class' => 'form-control', 'placeholder'=>'Nombres','maxlength'=>'25'])}}
            </div>

            <div class="form-group col-md-6">
            <label>Apellido Paterno:</label>
                {{Form::text('apePatC',$cliente->apePatC,['class' => 'form-control', 'placeholder'=>'Apellido Paterno','maxlength'=>'15'])}}
            </div>

            <div class="form-group col-md-6">
            <label>Apellido Materno:</label>
                {{Form::text('apeMatC',$cliente->apeMatC,['class' => 'form-control', 'placeholder'=>'Apellido Materno','maxlength'=>'15'])}}
            </div>

            <div class="form-group col-md-6">
            <label>Direccion:</label>
                {{Form::text('direccionC',$cliente->direccionC,['class' => 'form-control', 'placeholder'=>'Direccion','maxlength'=>'30'])}}
            </div>

            <div class="form-group col-md-6">
            <label>Telefono</label>
                {{Form::text('telefonoC',$cliente->telefonoC,['class' => 'form-control', 'placeholder'=>'Telefono','maxlength'=>'9'])}}
            </div>

            <div class="form-group col-md-6">
            <label>Correo</label>
                {{Form::email('correoC',$cliente->correoC,['class' => 'form-control', 'placeholder'=>'Correo','maxlength'=>'50'])}}
            </div>

            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcionC',$cliente->descripcionC,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'50'])}}
            </div>

            <div class="form-group text-right">
                <a href="{{url('/clientes')}}">Regresar al listado de productos</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}