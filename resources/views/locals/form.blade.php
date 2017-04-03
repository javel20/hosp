{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$local->nombre,['class' => 'form-control', 'placeholder'=>'Nombres','maxlength'=>'100'])}}
                @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
            </div>



            <div class="form-group col-md-6">
            <label>Direccion:</label>
                {{Form::text('direccion',$local->direccion,['class' => 'form-control', 'placeholder'=>'Direccion','maxlength'=>'50'])}}
                @if($errors->has('direccion'))
                    <span style='color:red;'>{{$errors->first('direccion')}}</span>
                @endif
            </div>

            <div class="form-group col-md-6">
            <label>Telefono:</label>
                {{Form::text('telefono',$local->telefono,['class' => 'form-control', 'placeholder'=>'Telefono','maxlength'=>'50'])}}
                @if($errors->has('telefono'))
                    <span style='color:red;'>{{$errors->first('telefono')}}</span>
                @endif
            </div>

            
            <div class="form-group col-md-6">
            <label>Estado:</label>
                <select class="form-control" name="estado" id="estado" value={{$local->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="Habilitado" <?php echo ($local->estado=="Habilitado" ? 'selected="selected"' : '');?>>Habilitado</option>
                    <option value="Desabilitado" <?php echo ($local->estado=="Desabilitado" ? 'selected="selected"' : '');?>>Desabilitado</option>
                    <option value="Mantenimiento" <?php echo ($local->estado=="Mantenimiento" ? 'selected="selected"' : '');?>>Mantenimiento</option>
                </select>
            </div>



            <div class="form-group text-right">
                <a href="{{url('/locals')}}">Regresar al listado de Tipo de trabajador</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}