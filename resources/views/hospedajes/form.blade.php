{!!Form::open(['url' => $url, 'method' => $method])!!}

            <div class="form-group col-md-6">
                <label>Codigo:</label>
                {{Form::text('codigo',$hospedaje->codigo,['class' => 'form-control', 'placeholder'=>'Codigo','maxlength'=>'60'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Cliente</label>

                <select class="form-control" name="cliente" id="cliente" value={{$hospedaje->cliente_id}}>
                        <option value="">--seleccionar--</option>
                @foreach ($clientes as $cliente)
                        @if($hospedaje->cliente_id==$cliente->id)
                            <option value={{$cliente->id}} selected> {{$cliente->nombre}} </option>
                            @else
                            <option value={{$cliente->id}}> {{$cliente->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>


            <div class="form-group col-md-6">
                <label class="control-label" for="date">Fecha Inicio</label>
                <input validate="date" class="form-control" id="date" name="fechai" placeholder="MM/DD/YYYY" maxlength="10" value={{$hospedaje->fechai}}>

            </div>

            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Termino</label>
                <input validate="date" class="form-control" id="date" name="fechaf" placeholder="MM/DD/YYYY" maxlength="10"  value={{$hospedaje->fechaf}}>

            </div>

            <div class="form-group col-md-6">
            <label>Tipo Habitacion</label>

                <select class="form-control" name="tipohab" id="tipohab" value={{$hospedaje->tipohabitacion_id}}>
                        <option value="">--seleccionar--</option>
                @foreach ($tipohabitacions as $th)
                        @if($hospedaje->tipohabitacion_id==$th->id)
                            <option precio={{$th->precio}} value={{$th->id}} selected> {{$th->nombre}} </option>
                            @else
                            <option precio={{$th->precio}} value={{$th->id}}> {{$th->nombre}} </option>
                        @endif
                @endforeach
                </select>

            </div>

            <div class="form-group col-md-6">
            <label>Precio por día</label>
                <input type="text" class="form-control" readonly="readonly"  name="precio" id="precio" placeholder="S/." maxlength="8" value={{$hospedaje->habitacion_id}}>

            </div>

            <div class="form-group col-md-6">
            <label>Precio total</label>
                {{Form::text('preciototal',$hospedaje->preciototal,['class' => 'form-control','readonly'=>'readonly' , 'placeholder'=>'S/.','maxlength'=>'8'])}}

            </div>


            <div class="form-group col-md-6">
            <label>Habitacion</label>

                <select class="form-control" name="habit" id="habit" value={{$hospedaje->habitacion_id}}>
                        <option value="">--seleccionar--</option>
                <!--@foreach ($habitacions as $habit)
                        @if($hospedaje->habitacion_id==$habit->id)
                            <option value={{$habit->id}} selected> {{$habit->numero}} </option>
                            @else
                            <option value={{$habit->id}}> {{$habit->numero}} </option>
                        @endif
                @endforeach-->
                </select>

            </div>

            <div class="form-group col-md-6">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$hospedaje->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="Habilitado" <?php echo ($hospedaje->estado=="Habilitado" ? 'selected="selected"' : '');?>>Habilitado</option>
                    <option value="Ocupado" <?php echo ($hospedaje->estado=="Ocupado" ? 'selected="selected"' : '');?>>Ocupado</option>
                    <option value="Reservado" <?php echo ($hospedaje->estado=="Reservado" ? 'selected="selected"' : '');?>>Reservado</option>
                </select>
                
            </div>

            


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$hospedaje->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
            </div>


            <div class="form-group text-right">
                <a href="{{url('/hospedajes')}}">Regresar al listado de hospedaje</a>
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        
        </div>

        {!! Form::close() !!}