
  // $(document).ready(function(){
    
  //   var date_input=$('input[name="fechai"]'); //our date input has the name "date"
  //   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  //   var options={
  //     format: 'mm/dd/yyyy',
  //       container: container,
  //       todayHighlight: true,
  //       autoclose: true,
  //   };
  //   date_input.datepicker(options);
  //   // console.log(options);

   

  //   var date_input=$('input[name="fechaf"]'); //our date input has the name "date"
  //   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  //   var options={
  //       format: 'mm/dd/yyyy',
  //       container: container,
  //       todayHighlight: true,
  //       autoclose: true,
  //   };
  //   date_input.datepicker(options);
  // })

           

  $("#tipohab").on("change", function (event){
    console.log("asdasda");
    $.ajax({
    url:"http://localhost/hospedaje/public/habitacionAjax?id=" + event.target.value,
    dataType: 'text',
    // data : {id:event.target.value},
    cache:false,
    type:'GET',

      success:function(response){

        console.log("exito")
        let acumulador="<option>--seleccionar--</option>";
        console.log(JSON.parse(response));
        JSON.parse(response).map( //map iterar un array
        function(e){ //e representa un objeto
        acumulador += "<option value="+ e.id +">" + e.numero +" </option>" 

        });              
      
        $("#habit").html(acumulador);

      },

      error:function(response){

      console.log("error")
      }

    });

    //aprovecho el atributo precio que incluyo en las opciones del foreach de la caja tipohabitacion, tomar en cuenta el value
    var precio="";
        event.target.childNodes.forEach(function(e){
          if(e.value==event.target.value){
            precio += e.getAttribute('precio')
            console.log(precio);
            $("#precio").val(precio);
          }
        });

  })
