{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6 col-sm-10">
            <label>Numero de Habitacion:</label>
                {{Form::text('numero',$habitacion->numero,['class' => 'form-control', 'placeholder'=>'numeros','maxlength'=>'3'])}}
                @if($errors->has('numero'))
                    <span style='color:red;'>{{$errors->first('numero')}}</span>
                @endif
            </div>


            <div class="form-group col-md-6 col-sm-10">
            <label>Vigencia</label>
                <select class="form-control" name="vigencia" id="vigencia" value={{$habitacion->vigencia}}>
                    <option value="">--seleccionar--</option>
                    <option value="Activo" <?php echo ($habitacion->vigencia=="Activo" ? 'selected="selected"' : '');?>>Activo</option>
                    <option value="Inactivo" <?php echo ($habitacion->vigencia=="Inactivo" ? 'selected="selected"' : '');?>>Inactivo</option>
                </select>
                @if($errors->has('vigencia'))
                    <span style='color:red;'>{{$errors->first('vigencia')}}</span>
                @endif
                
            </div>

            <div class="form-group col-md-6 col-sm-10">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$habitacion->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="Disponible" <?php echo ($habitacion->estado=="Disponible" ? 'selected="selected"' : '');?>>Disponible</option>
                    <option value="Ocupado" <?php echo ($habitacion->estado=="Ocupado" ? 'selected="selected"' : '');?>>Ocupado</option>
                    <option value="Mantenimiento" <?php echo ($habitacion->estado=="Mantenimiento" ? 'selected="selected"' : '');?>>Mantenimiento</option>
                    <option value="Reservado" <?php echo ($habitacion->estado=="Reservado" ? 'selected="selected"' : '');?>>Reservado</option>
                </select>
                @if($errors->has('estado'))
                    <span style='color:red;'>{{$errors->first('estado')}}</span>
                @endif
            </div>



            <div class="form-group col-md-6 col-sm-10">
            <label>Tipo Habitacion</label>

                <select class="form-control" name="tipohabitacion" id="tipohabitacion" value="{{$habitacion->tipohabitacion_id}}">
                        <option value="">--seleccionar--</option>
                @foreach ($tipos as $tipo)
                        @if($habitacion->tipohabitacion_id==$tipo->id)
                            <option value="{{$tipo->id}}" selected> {{$tipo->nombre}} </option>
                            @else
                            <option value="{{$tipo->id}}"> {{$tipo->nombre}} </option>
                        @endif
                @endforeach
                </select>

                @if($errors->has('tipohabitacion'))
                    <span style='color:red;'>{{$errors->first('tipohabitacion')}}</span>
                @endif

            </div>

            <div class="form-group col-md-6 col-sm-10">
            <label>Descripcion</label>
                {{Form::text('descripcion',$habitacion->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
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