@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar hospedajes</h1>


            @include('hospedajes.form',['hospedaje'=>$hospedaje, 'url' => '/hospedajes/'.$hospedaje->id, 'method' => 'PATCH'])

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
           
         
    </div>

@endsection

@section("js")

    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <script type="text/javascript" src=<?php echo url("js\hospedaje\hospedaje.js")?>></script>


<!--    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script>
                    $(document).ready(function(){
                      var date_input=$('input[name="fechai"]'); //our date input has the name "date"
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

    <script>
                    $(document).ready(function(){
                      var date_input=$('input[name="fechaf"]'); //our date input has the name "date"
                        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                        var options={
                          format: 'mm/dd/yyyy',
                          container: container,
                          todayHighlight: true,
                          autoclose: true,
                        };
                        date_input.datepicker(options);
                      })
                  </script>-->
@endsection