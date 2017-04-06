{!!Form::open(['url' => $url, 'method' => $method])!!}

       <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$licencia->nombre,['class' => 'form-control', 'placeholder'=>'nombre','maxlength'=>'60'])}}
                
            </div>


            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Inicio</label>
                <input validate="date" class="form-control" id="date" name="fechai" placeholder="MM/DD/YYYY" maxlength="10" value={{$licencia->fechai}}>

                  

            </div>

            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Termino</label>
                <input validate="date" class="form-control" id="date" name="fechaf" placeholder="MM/DD/YYYY" maxlength="10"  value={{$licencia->fechaf}}>

                  

            </div>

            <div class="form-group col-md-6">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$licencia->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="De permiso" <?php echo ($licencia->estado=="De permiso" ? 'selected="selected"' : '');?>>De permiso</option>
                    <option value="De retorno" <?php echo ($licencia->estado=="De retorno" ? 'selected="selected"' : '');?>>De retorno</option>
                </select>
                
            </div>


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$licencia->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Trabajador</label>

                <select class="form-control" name="trabajador" id="trabajador" value={{$licencia->trabajador_id}}>
                        <option value="">--seleccionar--</option>
                @foreach ($trabajadors as $trab)
                        @if($licencia->trabajador_id==$trab->id)
                            <option value={{$trab->id}} selected> {{$trab->nombre}} </option>
                            @else
                            <option value={{$trab->id}}> {{$trab->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>

            

            <div class="form-group text-right">
                <a href="{{url('/licencias')}}">Regresar al listado de licencia</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}