{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6">
            <label>Numero de Habitacion:</label>
                {{Form::text('numero',$habitacion->numero,['class' => 'form-control', 'placeholder'=>'numeros','maxlength'=>'60'])}}
                
            </div>


            <div class="form-group col-md-6">
            <label>Vigencia</label>
                {{Form::text('vigencia',$habitacion->vigencia,['class' => 'form-control', 'placeholder'=>'vigencia','maxlength'=>'15'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Estado</label>
                {{Form::text('estado',$habitacion->estado,['class' => 'form-control', 'placeholder'=>'estado','maxlength'=>'15'])}}
                
            </div>


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$habitacion->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Tipo Habitacion</label>

                <select class="form-control" name="tipoh" id="tipoh" value={{$habitacion->tipohabitacion_id}}>
                @foreach ($tipos as $tipo)
                        @if($habitacion->tipohabitacion_id==$tipo->id)
                            <option value={{$tipo->id}} selected> {{$tipo->nombre}} </option>
                            @else
                            <option value={{$tipo->id}}> {{$tipo->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>

            

            <div class="form-group text-right">
                <a href="{{url('/habitacions')}}">Regresar al listado de Habitacion</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}