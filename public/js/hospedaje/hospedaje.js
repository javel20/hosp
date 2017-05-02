
  // alert("vuelve ah seleccionar el tipo habitacion las fechas y la habitacion");
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



var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + "hospedaje";
// var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        

  $("#tipohabitacion").on("change", function (event){
    console.log("asdasda");
    $.ajax({
    url:baseUrl+"/public/habitacionAjax?id=" + event.target.value,
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
      
        $("#habitacion").html(acumulador);

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

var arrayi='';
var arrayii='';
var arrayiii='';
$("#fechai").on("change", function (event){
  // var arrayi=document.getElementById("fechai").value;
  fechaf.value = "dd/mm/aaaa";
  arrayi = moment(event.target.value);
  // arrayii = arrayi.split("-");
  // arrayiii = new Date(arrayii[0], arrayii[1]-1, arrayii[2]).toLocaleDateString();

  // console.log(Date(arrayii[1]))
  // console.log("arrayiii"+arrayiii);
  // console.log("ii"+arrayii)
  console.log("arrayi"+arrayi);
  // console.log(arrayi.split("-"));
  // console.log(Number(arrayii[2]));
  console.log(baseUrl+"/public/habitacionAjax?id=");

  })
var resta='';
var arrayff='';
var arrayfff='';
  $("#fechaf").on("change", function (event){
    var preciototal='';
    console.log(fechai);
    console.log("ptantesdelif"+preciototal);
    // if(preciototal==''){
    if(arrayi==''){
        alert("fije la fecha de inicio");
        fechaf.value = "dd/mm/aaaa";
        // stop();
          
      }
      else{
          arrayf = moment(event.target.value);
          // arrayff = arrayf.split("-");
          // arrayfff = new Date(arrayff[0], arrayff[1]-1, arrayff[2]).toLocaleDateString();
          // console.log(arrayf.split("-"));
          // console.log(arrayff[2]);
          // resta=Date(arrayfff-arrayiii).toLocaleDateString();
          resta = arrayf.diff(arrayi, "days");
          console.log(resta);
          // console.log(porc)
            preciototal=Number((resta*Number(precio.value)));
            console.log("precio"+precio.value);
            console.log("pt"+preciototal);
            $("#preciototal").val(preciototal);
      }
})
          
