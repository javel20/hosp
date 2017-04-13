{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6 col-sm-10">
            <label>Numero de Habitacion:</label>
                {{Form::text('numero',$habitacion->numero,['class' => 'form-control', 'placeholder'=>'numeros','maxlength'=>'60'])}}
                
            </div>


            <div class="form-group col-md-6 col-sm-10">
            <label>Vigencia</label>
                {{Form::text('vigencia',$habitacion->vigencia,['class' => 'form-control', 'placeholder'=>'vigencia','maxlength'=>'15'])}}
                
            </div>

            <div class="form-group col-md-6 col-sm-10">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$habitacion->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="Habilitado" <?php echo ($habitacion->estado=="Habilitado" ? 'selected="selected"' : '');?>>Habilitado</option>
                    <option value="Ocupado" <?php echo ($habitacion->estado=="Ocupado" ? 'selected="selected"' : '');?>>Ocupado</option>
                    <option value="Mantenimiento" <?php echo ($habitacion->estado=="Mantenimiento" ? 'selected="selected"' : '');?>>Mantenimiento</option>
                </select>
            </div>


            <div class="form-group col-md-6 col-sm-10">
            <label>Descripcion</label>
                {{Form::text('descripcion',$habitacion->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
            </div>

            <div class="form-group col-md-6 col-sm-10">
            <label>Tipo Habitacion</label>

                <select class="form-control" name="tipoh" id="tipoh" value={{$habitacion->tipohabitacion_id}}>
                        <option value="">--seleccionar--</option>
                @foreach ($tipos as $tipo)
                        @if($habitacion->tipohabitacion_id==$tipo->id)
                            <option value={{$tipo->id}} selected> {{$tipo->nombre}} </option>
                            @else
                            <option value={{$tipo->id}}> {{$tipo->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>

        </div>
        <br>
        <div class="form-group col-md-9 col-sm-10">
            <div class="form-group text-right">
                <br>
                <a href="{{url('/habitacions')}}">Regresar al listado de Habitacion</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        </div>

        {!! Form::close() !!}