
{!!Form::open(['url' => $url, 'method' => $method])!!}


            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$trabajador->nombre,['class' => 'form-control', 'placeholder'=>'nombres','maxlength'=>'60'])}}
                
            </div>


            <div class="form-group col-md-6">
            <label>Apellido Paterno</label>
                {{Form::text('apellidopaterno',$trabajador->apellidopaterno,['class' => 'form-control', 'placeholder'=>'apellidopaterno','maxlength'=>'15'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Apellido Materno</label>
                {{Form::text('apellidomaterno',$trabajador->apellidomaterno,['class' => 'form-control', 'placeholder'=>'Apellido Materno','maxlength'=>'15'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Direccion</label>
                {{Form::text('direccion',$trabajador->direccion,['class' => 'form-control', 'placeholder'=>'Direccion','maxlength'=>'15'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Celular</label>
                {{Form::text('celular',$trabajador->celular,['class' => 'form-control', 'placeholder'=>'Celular','maxlength'=>'15'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Operador</label>
                {{Form::text('operador',$trabajador->operador,['class' => 'form-control', 'placeholder'=>'Operador','maxlength'=>'15'])}}
                
            </div>


            <div class="form-group col-md-6">
            <label>Estado</label>
                {{Form::text('estado',$trabajador->estado,['class' => 'form-control', 'placeholder'=>'estado','maxlength'=>'15'])}}
                
            </div>


            <div class="form-group col-md-6">
            <label>Tipo trabajador</label>

                <select class="form-control" name="tipotrab" id="tipot" value={{$trabajador->tipotrabajador_id}}>
                            <option value="seleccionar">--seleccionar--</option>
                @foreach($tipotrabajadors as $tipo)
                        @if($trabajador->tipotrabajador_id == $tipo->id)
                            <option value={{$tipo->id}} selected> {{$tipo->nombre}} </option>
                            @else
                            <option value={{$tipo->id}}> {{$tipo->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>

            <div class="form-group col-md-6">
            <label>Local</label>

                <select class="form-control" name="local" id="locals" value={{$trabajador->local_id}}>
                            <option value="seleccionar">--seleccionar--</option>
                @foreach ($locals as $local)
                        @if($trabajador->local_id==$local->id)
                            <option value={{$local->id}} selected> {{$local->nombre}} </option>
                            @else
                            <option value={{$local->id}}> {{$local->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>

            <div class="form-group col-md-6">
            <label>Usuario</label>

                <select class="form-control" name="user" id="users" value={{$trabajador->user_id}}>
                            <option value="seleccionar">--seleccionar--</option>
                @foreach ($users as $user)
                        @if($trabajador->user_id==$user->id)
                            <option value={{$user->id}} selected> {{$user->email}} </option>
                            @else
                            <option value={{$user->id}}> {{$user->email}} </option>
                        @endif
                @endforeach
                </select>

            </div>
            

            <div class="form-group text-right">
                <a href="{{url('/trabajadors')}}">Regresar al listado de Trabajadores</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>

        {!! Form::close() !!}