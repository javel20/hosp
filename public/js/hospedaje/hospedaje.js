
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


                       $("#tipohab").on("change", function (event){
    
                          $.ajax({
                          url:"http://localhost/hospedaje/tipohabitacion/habitacionAjax/" +event.target.value,
                          dataType: 'text',
                          cache:false,
                          type:'GET',
                        
                          success:function(response){


                            console.log("exito")
                          },
                        
                            error:function(response){

                            console.log("error")
                          }

                           });

           })
