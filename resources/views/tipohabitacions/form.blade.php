{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$tipohabitacion->nombre,['class' => 'form-control', 'placeholder'=>'Nombres','maxlength'=>'60'])}}
                @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
            </div>


            <div class="form-group col-md-6">
            <label>Precio</label>
                {{Form::text('precio',$tipohabitacion->precio,['class' => 'form-control', 'placeholder'=>'S/.','maxlength'=>'8'])}}
                @if($errors->has('precio'))
                    <span style='color:red;'>{{$errors->first('precio')}}</span>
                @endif
            </div>


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$tipohabitacion->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'50'])}}
                @if($errors->has('descripcion'))
                    <span style='color:red;'>{{$errors->first('descripcion')}}</span>
                @endif
            </div>

            <div class="form-group text-right">
                <a href="{{url('/tipohabitacions')}}">Regresar al listado de Tipo de Habitacion</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}