{!!Form::open(['url' => $url, 'method' => $method])!!}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$licencia->nombre,['class' => 'form-control', 'placeholder'=>'nombre','maxlength'=>'60'])}}
                
            </div>


            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Inicio</label>
                <input validate="date" class="form-control" id="date" name="fechai" placeholder="MM/DD/YYYY" maxlength="10" type="text"/>

                  <script>
                    $(document).ready(function(){
                      var date_input=$('input[name="Fecha"]'); //our date input has the name "date"
                        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                        var options={
                          format: 'mm/dd/yyyy',
                          container: container,
                          todayHighlight: true,
                          autoclose: true,
                        };
                        date_input.datepicker(options);
                      })
                  </script>

            </div>

            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Termino</label>
                <input validate="date" class="form-control" id="date" name="fechaf" placeholder="MM/DD/YYYY" maxlength="10" type="text"/>

                  <script>
                    $(document).ready(function(){
                      var date_input=$('input[name="Fecha"]'); //our date input has the name "date"
                        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                        var options={
                          format: 'mm/dd/yyyy',
                          container: container,
                          todayHighlight: true,
                          autoclose: true,
                        };
                        date_input.datepicker(options);
                      })
                  </script>

            </div>

            <div class="form-group col-md-6">
            <label>Estado</label>
                {{Form::text('estado',$licencia->estado,['class' => 'form-control', 'placeholder'=>'estado','maxlength'=>'15'])}}
                
            </div>


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$licencia->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
            </div>

            <div class="form-group col-md-6">
            <label>Trabajador</label>

                <select class="form-control" name="tipoh" id="tipoh" value={{$licencia->trabajador_id}}>
                @foreach ($trabajadors as $trab)
                        @if($licencia->tipolicencia_id==$trab->id)
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