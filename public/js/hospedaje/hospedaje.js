
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
  //   };qwdqwdqwd
  //   date_input.datepicker(options);
  // })


  // var diahora = document.getElementById("diahora");
  // var ruc_espacio = document.getElementById("ruc_espacio");
  // var fechai = document.getElementById("fechai");
  // var fechaf = document.getElementById("fechaf");
  // fechai.innerHTML=`<label>Fecha Inicio</label>
  //                             <input type="date" class="form-control" name="fechai" placeholder="fechai" maxlength="10">`
  // fechaf.innerHTML=`<label>Fecha Inicio</label>
  //                             <input type="date" class="form-control" name="fechaf" placeholder="fechaf" maxlength="10">`

  // diahora.onchange=function(e){
  //     if(e.target.value == "Dia"){
  //       fechai.innerHTML=`<label>Fecha Inicio</label>
  //                             <input type="date" class="form-control" id="fechai" name="fechai" value="dd/mm/aaaa" maxlength="10">`
  //       fechaf.innerHTML=`<label>Fecha Fin</label>
  //                             <input type="date" class="form-control" id="fechaf" name="fechaf"   maxlength="10">`

  //     }else if(e.target.value == "Hora"){
  //       fechai.innerHTML=`<label>Hora Inicio</label>
  //                             <input type="time" class="form-control" id="fechai" name="fechai" maxlength="10">`
  //       fechaf.innerHTML=`<label>Hora Fin</label>
  //                             <input type="time" class="form-control" id="fechaf" name="fechaf" maxlength="10">`
  //     }
  //  };






$("#diahora").on("change", function(event){

    $("#preciototal").val('');
    $("#precio").val('');
    //  $("#fechai").val('');

    tipohabitacion.value=0;
    // fechai.value = new Date(1995,11,17);
    preciototal.value='';
        
        if(event.target.value == "Dia"){
// console.log(event.target);
          $('#fechaii').css("display","inline-block")
          $('#fechaff').css("display","inline-block")
          $('#horaii').css("display","none")
          $('#horaff').css("display","none")
          horai.value= '--:--';
          horaf.value= '--:--';
            // console.log("estoy en cirugia");
            // $('#select_cirugia')[0].setAttribute("validate","selecbus")//attr para modificar propiedades

        }else if(event.target.value == "Hora"){

          $('#fechaii').css("display","none")
          $('#fechaff').css("display","none")
          $('#horaii').css("display","inline-block")
          $('#horaff').css("display","inline-block")
          fechai.value= 'dd/mm/aaaa';
          fechaf.value= 'dd/mm/aaaa';
            // console.log("estoy en cirugia");
            // $('#select_analisis')[0].setAttribute("validate","selecbus")//attr para modificar propiedades


        }
         
        });






const host=document.getElementById("habit").value;
var getUrl = window.location;
// var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + "hospedaje"+"/public/index.php";
var baseUrl = getUrl .protocol + "//" + getUrl.host;
// var url=$("#habitacion").val;

  $("#tipohabitacion").on("change", function (event){
    preciototal.value='';

      horai.value= '--:--';
      horaf.value= '--:--';

      fechai.value= 'dd/mm/aaaa';
      fechaf.value= 'dd/mm/aaaa';

    console.log("asdasda");
    console.log(fechai);
    $.ajax({
    // url:baseUrl+"/habitacionAjax?id=" + event.target.value,
    url:host+"/habitacionAjax?id=" + event.target.value,
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
          var fechai = document.getElementById("fechai"); 


        });              
      
        $("#habitacion").html(acumulador);

      },

      error:function(response){

      console.log("error")
      }

    });


var dh=document.getElementById("diahora").value;
console.log("dh "+dh);

    //aprovecho el atributo precio que incluyo en las opciones del foreach de la caja tipohabitacion, tomar en cuenta el value
    var preciodia="";
    var preciohora="";
        event.target.childNodes.forEach(function(e){
          if(e.value==event.target.value && dh=="Dia"){
            preciodia += e.getAttribute('preciodia')
            console.log(preciodia);
            $("#precio").val(preciodia);
          }
          else if(e.value==event.target.value && dh=="Hora"){
            preciohora += e.getAttribute('preciohora')
            console.log(preciohora);
            $("#precio").val(preciohora);
          }

        });



  })



var arrayi='';
var arrayii='';
var arrayiii='';
$("#fechai").on("change", function (event){

  // var arrayi=document.getElementById("fechai").value;
  // fechaf.value = "dd/mm/aaaa";
  arrayi = moment(event.target.value);
  console.log(arrayi)
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
    console.log(fechai.value);
    if(fechai.value==''){
      console.log(arrayi);
      fechaf.value='dd/mm/aaaa';
      alert("Primero ingrese fecha inicio");

    
      }
      else{
          arrayf = moment(event.target.value);
          // arrayff = arrayf.split("-");
          // arrayfff = new Date(arrayff[0], arrayff[1]-1, arrayff[2]).toLocaleDateString();
          // console.log(arrayf.split("-"));
          // console.log(arrayff[2]);
          // resta=Date(arrayfff-arrayiii).toLocaleDateString();
          var dh=document.getElementById("diahora").value;
          if(dh=="Dia"){
            console.log(horai.value);
          resta = arrayf.diff(arrayi, "days");
          preciototal=Number((resta*Number(precio.value)));
            console.log("precio"+precio.value);
            console.log("pt"+preciototal);
            $("#preciototal").val(preciototal);
          }
          console.log(resta);

      }
})
          

$("#horai").on("change", function (event){


var i= horai.value.split(":");
  console.log(horai.value);
  console.log(horai.value.split(":"));

var arrayi= (i[0]);
  console.log(arrayi);
  console.log(i[1]);
  


})




 $("#horaf").on("change", function (event){
    var preciototal='';
    // console.log(fechai);
    console.log("ptantesdelif"+preciototal);
    if(horai.value==''){
      // console.log(horai.value);
        horaf.value=='--:--'
        console.log("asdasd");
        alert("Ingrese hora inicio");
        if(horaf.value!=''){
          horaf.value='--:--';
          console.log(horaf.value);
        }

    
      }
      else{

        var i= horaf.value.split(":");
          console.log(horaf.value);
          console.log(horaf.value.split(":"));

        var arrayf= (i[0]);
          console.log(arrayf);
          console.log(i[1]);
          console.log(arrayi);
          
          var dh=document.getElementById("diahora").value;
          if(dh=="Hora"){


            var i=document.getElementById("horai").value;
            var i= horai.value.split(":");
              console.log(horai.value);
              console.log(horai.value.split(":"));

            var arrayi= (i[0]);
              console.log(arrayi);
              console.log(i[1]);


            resta= Number(Number(arrayf)-Number(arrayi));
            console.log(resta);
            console.log(precio);
            console.log(precio);
            preciototalhora=Number(resta*Number(precio.value));
          // resta = arrayf-arrayi
          // preciototal=Number((resta*Number(precio.value)));
          // preciototal=20;
          console.log(horai.value);
            console.log("precio"+precio.value);
            console.log("pt"+preciototalhora);
            $("#preciototal").val(preciototalhora);
          }
          console.log(resta);

      }
})
          
