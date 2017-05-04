{!!Form::open(['url' => $url, 'method' => $method])!!}

            <div class="form-group col-md-6">
                <label>Codigo:</label>
                {{Form::text('codigo',$hospedaje->codigo='',['class' => 'form-control', 'placeholder'=>'Codigo','maxlength'=>'8'])}}

                @if($errors->has('codigo'))
                    <span style='color:red;'>{{$errors->first('codigo')}}</span>
                @endif

            </div>

            <div class="form-group col-md-6">
            <label>Cliente</label>

                <select class="form-control" name="cliente" id="cliente" value={{$hospedaje->cliente_id}}>
                        <option value="">--seleccionar--</option>
                    @foreach ($clientes as $cliente)
                            @if($hospedaje->cliente_id==$cliente->id)
                                <option value={{$cliente->id}} selected> {{$cliente->nombre}} {{$cliente->apellidopaterno}} {{$cliente->apellidomaterno}}</option>
                                @else
                                <option value={{$cliente->id}}> {{$cliente->nombre}} {{$cliente->apellidopaterno}} {{$cliente->apellidomaterno}}</option>
                            @endif
                    @endforeach
                </select>

                @if($errors->has('cliente'))
                    <span style='color:red;'>{{$errors->first('cliente')}}</span>
                @endif
<br>
            </div>
            
            <div class="form-group col-md-6">
            <label>Tipo Habitacion</label>

                <select class="form-control" name="tipohabitacion" id="tipohabitacion" value="{{$hospedaje->tipohabitacion}}">
                        <option value="">--seleccionar--</option>
                @foreach ($tipohabitacions as $th)
                        @if($hospedaje->tipohabitacion==$th->id)
                            <option value="{{$th->id}}" precio="{{$th->precio}}"> {{$th->nombre}} </option>
                            @else
                            <option value="{{$th->id}}" precio="{{$th->precio}}"> {{$th->nombre}} </option>
                        @endif
                @endforeach
                </select>

                @if($errors->has('tipohabitacion'))
                    <span style='color:red;'>{{$errors->first('tipohabitacion')}}</span>
                @endif
<br>
            </div>

            <div class="form-group col-md-6">
            <label>Precio por día</label>
                <input type="text" class="form-control" readonly="readonly"  name="precio" id="precio" placeholder="S/." maxlength="8" required value={{$hospedaje->precio}}>
                <br>
            </div>


            <div class="form-group col-md-6">
                <label class="control-label" for="date">Fecha Inicio</label>
                {{Form::date('fechai',$hospedaje->fechai='dd/mm/aaaa',['class' => 'form-control', 'id'=> 'fechai'])}}

                @if($errors->has('fechai'))
                    <span style='color:red;'>{{$errors->first('fechai')}}</span>
                @endif
<br>
            </div>

            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Termino</label>
                {{Form::date('fechaf',$hospedaje->fechaf='dd/mm/aaaa',['class' => 'form-control', 'id'=>'fechaf'])}}

                @if($errors->has('fechaf'))
                    <span style='color:red;'>{{$errors->first('fechaf')}}</span>
                @endif
<br>
            </div>

            
            <div class="form-group col-md-6">
            <label>Precio total</label>
                {{Form::text('preciototal',$hospedaje->preciototal,['class' => 'form-control','placeholder'=>'S/.','id'=>'preciototal', 'readonly'=>'readonly'])}}

                @if($errors->has('preciototal'))
                    <span style='color:red;'>{{$errors->first('preciototal')}}</span>
                @endif
<br>
            </div>


            <div class="form-group col-md-6">
            <label>Habitacion</label>

                <select class="form-control" name="habitacion" id="habitacion" value={{$hospedaje->habitacion_id}}>
                        <option value="">--seleccionar--</option>
                <!--@foreach ($habitacions as $habit)
                        @if($hospedaje->habitacion_id==$habit->id)
                            <option value={{$habit->id}} selected> {{$habit->numero}} </option>
                            @else
                            <option value={{$habit->id}}> {{$habit->numero}} </option>
                        @endif
                @endforeach-->
                </select>

                @if($errors->has('habitacion'))
                    <span style='color:red;'>{{$errors->first('habitacion')}}</span>
                @endif
<br>
            </div>

            <div class="form-group col-md-6">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$hospedaje->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="Habilitado" <?php echo ($hospedaje->estado=="Habilitado" ? 'selected="selected"' : '');?>>Habilitado</option>
                    <option value="Ocupado" <?php echo ($hospedaje->estado=="Ocupado" ? 'selected="selected"' : '');?>>Ocupado</option>
                    <option value="Reservado" <?php echo ($hospedaje->estado=="Reservado" ? 'selected="selected"' : '');?>>Reservado</option>
                </select>

                @if($errors->has('estado'))
                    <span style='color:red;'>{{$errors->first('estado')}}</span>
                @endif
                <br>
            </div>

            


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$hospedaje->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
            </div>


            <div class="form-group text-right">
                <a href="{{url('/hospedajes')}}">Regresar al listado de hospedaje</a>
                <input type="hidden" name="trabajador" value= <?php echo Auth::user()->id; ?> >
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        <br>
        </div>

        {!! Form::close() !!}