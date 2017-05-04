{!!Form::open(['url' => $url, 'method' => $method])!!}

            <div class="form-group col-md-6">
            {!! Form::label('dni', 'DNI:') !!}
                {{ Form::text('dni',$cliente->dni,['class' => 'form-control', 'placeholder'=>'DNI','maxlength'=>'8']) }}

                @if($errors->has('dni'))
                    <span style='color:red;'>{{$errors->first('dni')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$cliente->nombre,['class' => 'form-control', 'placeholder'=>'Nombres','maxlength'=>'60'])}}
                @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Apellido Paterno:</label>
                {{Form::text('apellidopaterno',$cliente->apellidopaterno,['class' => 'form-control', 'placeholder'=>'Apellido Paterno','maxlength'=>'25'])}}
                @if($errors->has('apellidopaterno'))
                    <span style='color:red;'>{{$errors->first('apellidopaterno')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Apellido Materno:</label>
                {{Form::text('apellidomaterno',$cliente->apellidomaterno,['class' => 'form-control', 'placeholder'=>'Apellido Materno','maxlength'=>'25'])}}
                @if($errors->has('apellidomaterno'))
                    <span style='color:red;'>{{$errors->first('apellidomaterno')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Direccion:</label>
                {{Form::text('direccion',$cliente->direccion,['class' => 'form-control', 'placeholder'=>'Direccion','maxlength'=>'30'])}}
                @if($errors->has('direccion'))
                    <span style='color:red;'>{{$errors->first('direccion')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Telefono</label>
                {{Form::text('telefono',$cliente->telefono,['class' => 'form-control', 'placeholder'=>'Telefono','maxlength'=>'9'])}}
                @if($errors->has('telefono'))
                    <span style='color:red;'>{{$errors->first('telefono')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Correo</label>
                {{Form::email('correo',$cliente->correo,['class' => 'form-control', 'placeholder'=>'Correo','maxlength'=>'50'])}}
                @if($errors->has('correo'))
                    <span style='color:red;'>{{$errors->first('correo')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$cliente->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'50'])}}
                @if($errors->has('descripcion'))
                    <span style='color:red;'>{{$errors->first('descripcion')}}</span>
                @endif
                <br>
            </div>

            <div class="col-md-12 form-group text-right">
                <a href="{{url('/clientes')}}">Regresar al listado de productos</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}