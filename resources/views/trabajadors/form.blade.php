
{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$trabajador->nombre,['class' => 'form-control', 'placeholder'=>'nombres','maxlength'=>'60'])}}
                
                @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
                <br>
            </div>


            <div class="form-group col-md-6">
            <label>Apellido Paterno</label>
                {{Form::text('apellidopaterno',$trabajador->apellidopaterno,['class' => 'form-control', 'placeholder'=>'apellidopaterno','maxlength'=>'15'])}}
                
                @if($errors->has('apellidopaterno'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Apellido Materno</label>
                {{Form::text('apellidomaterno',$trabajador->apellidomaterno,['class' => 'form-control', 'placeholder'=>'Apellido Materno','maxlength'=>'15'])}}
                
                @if($errors->has('apellidomaterno'))
                    <span style='color:red;'>{{$errors->first('apellidomaterno')}}</span>
                @endif
                <br>
                
            </div>

            <div class="form-group col-md-6">
            <label>Direccion</label>
                {{Form::text('direccion',$trabajador->direccion,['class' => 'form-control', 'placeholder'=>'Direccion','maxlength'=>'15'])}}
                
                @if($errors->has('direccion'))
                    <span style='color:red;'>{{$errors->first('direccion')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-3">
            <label>Celular</label>
                {{Form::text('celular',$trabajador->celular,['class' => 'form-control', 'placeholder'=>'Celular','maxlength'=>'9'])}}
                
                @if($errors->has('celular'))
                    <span style='color:red;'>{{$errors->first('celular')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-3">
            <label>Operador</label>
                <select class="form-control" name="operador" id="operador" value={{$trabajador->operador}}>
                    <option value="">--seleccionar--</option>
                    <option value="Rpm" <?php echo ($trabajador->operador=="Rpm" ? 'selected="selected"' : '');?>>Rpm</option>
                    <option value="Movistar" <?php echo ($trabajador->operador=="Movistar" ? 'selected="selected"' : '');?>>Movistar</option>
                    <option value="Rpc" <?php echo ($trabajador->operador=="Rpc" ? 'selected="selected"' : '');?>>Rpc</option>
                    <option value="Claro" <?php echo ($trabajador->operador=="Claro" ? 'selected="selected"' : '');?>>Claro</option>
                    <option value="Entel" <?php echo ($trabajador->operador=="Entel" ? 'selected="selected"' : '');?>>Entel</option>
                    <option value="Bitel" <?php echo ($trabajador->operador=="Bitel" ? 'selected="selected"' : '');?>>Bitel</option>
                    <option value="Virgin" <?php echo ($trabajador->operador=="Virgin" ? 'selected="selected"' : '');?>>Virgin</option>
                </select>

                @if($errors->has('operador'))
                    <span style='color:red;'>{{$errors->first('operador')}}</span>
                @endif
                <br>
            </div>


            <div class="form-group col-md-6">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$trabajador->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="Contratado" <?php echo ($trabajador->estado=="Contratado" ? 'selected="selected"' : '');?>>Contratado</option>
                    <option value="Contrado Finalziado" <?php echo ($trabajador->estado=="Contrado Finalziado" ? 'selected="selected"' : '');?>>Contrado Finalziado</option>
                    <option value="Expulsado" <?php echo ($trabajador->estado=="Expulsado" ? 'selected="selected"' : '');?>>Expulsado</option>
                </select>

                @if($errors->has('estado'))
                    <span style='color:red;'>{{$errors->first('estado')}}</span>
                @endif
                <br>
            </div>


            <div class="form-group col-md-6">
            <label>Tipo trabajador</label>

                <select class="form-control" name="tipotrab" id="tipotrab" value={{$trabajador->tipotrabajador_id}}>
                            <option value="">--seleccionar--</option>
                @foreach($tipotrabajadors as $tipo)
                        @if($trabajador->tipotrabajador_id == $tipo->id)
                            <option value={{$tipo->id}} selected> {{$tipo->nombre}} </option>
                            @else
                            <option value={{$tipo->id}}> {{$tipo->nombre}} </option>
                        @endif
                @endforeach
                </select>

                @if($errors->has('tipotrab'))
                    <span style='color:red;'>{{$errors->first('tipotrab')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Local</label>

                <select class="form-control" name="local" id="local" value={{$trabajador->local_id}}>
                            <option value="">--seleccionar--</option>
                @foreach ($locals as $local)
                        @if($trabajador->local_id==$local->id)
                            <option value={{$local->id}} selected> {{$local->nombre}} </option>
                            @else
                            <option value={{$local->id}}> {{$local->nombre}} </option>
                        @endif
                @endforeach
                </select>

                @if($errors->has('local'))
                    <span style='color:red;'>{{$errors->first('local')}}</span>
                @endif
                <br>
            </div>


            

            <div class="col-md-12 form-group text-right">
                <div class="form-group text-right">
                    <a href="{{url('/trabajadors')}}">Regresar al listado de Trabajadores</a>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </div>

        {!! Form::close() !!}