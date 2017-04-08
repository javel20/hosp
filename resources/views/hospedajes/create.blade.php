@extends("layouts.app")


@section("content")

    <div class="">
    
        <h1>Nuevo Hospedaje</h1>

            @include('hospedajes.form',['hospedaje'=>$hospedaje, 'url' => '/hospedajes', 'method' => 'POST'])    
    
    </div>  

@endsection




@section("js")
    
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
                  </script>
@endsection