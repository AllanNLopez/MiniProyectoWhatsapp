 var receptor = "receptor";
 var emisor = "emisor";



function getTiempo(){
    var tiempo = new Date();
    var hora = tiempo.getHours();
    var minuto = tiempo.getMinutes();
    var segundo = tiempo.getSeconds();

    return ''+hora+':'+minuto+':'+segundo;
}

/* $(".name-meta").click(function(){
    receptor = $(this).html();
    $('#nombre-contacto').html(receptor); 
    $("#receptor-id").attr("src","img/profile-pics/"+receptor.toLowerCase()+".jpg");
    cargarMensajes(emisor, receptor);
}); */

 $(document).on('click', ".name-meta", function () {
    receptor = $(this).html();

    nombre =  '<p class="titulo" id="nombre-contacto"><b>'+receptor+'</b>'
              +'    <span style="color: #e0e0e0; font-size: 12px;">se actualizara en 30 segundos</span>'
              +'</p>';
    $('#emisor-div').html(nombre); 

    $("#receptor-id").attr("src","img/profile-pics/"+receptor.toLowerCase()+".jpg");
    $('#conversation').html("");
    cargarMensajes(emisor, receptor);
    return false;
});

function printContactos(nombre) {
  var contacto = $('#sideBar').html();
  contacto = contacto +
            '<div class="row sideBar-body"  >'
           + '  <div class="col-sm-3 col-xs-3 sideBar-avatar"> '
            +'    <div class="avatar-icon"> '
            +'      <img src="img/profile-pics/'+nombre+'.jpg">'
           + '    </div>'
           + '  </div>'
           + '  <div class="col-sm-9 col-xs-9 sideBar-main">'
           + '    <div class="row">'
           + '      <div class="col-sm-8 col-xs-8 sideBar-name">'
           +  '       <p class="name-meta">'+nombre+'</p>'
           +    '  </span>'
           +   '    </div>'
            +'    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">'
              +'      <span class="time-meta pull-right">18:18'
             +'     </span>'
             +'     </div>'
             +  ' </div> '
            +'  </div>'
           +' </div>'
 

    $('#sideBar').html(contacto);
   
}

function cargarContactos(emisor){
  $('#sideBar').html("");
    parametros = "emisor="+emisor; 
    $.ajax(
        {
          url: "../whatsapp/php/loadContacts.php",
          data: parametros,
          method:"POST",
          success:function(respuesta){
            if (respuesta != "") {
              var contactos = respuesta.split(",");
              for (var i = 0; i<contactos.length; i++) {
                printContactos(contactos[i]);
              }
            }
            
            
          },
          error:function(){
            alert("Ocurrio un error");
          }
        }
      );

   
}

$("#slc-usuario").change(function(){
  emisor = $( "#slc-usuario option:selected" ).text();
  $("#emisor-id").attr("src","img/profile-pics/"+emisor.toLowerCase()+".jpg");
  $("#emisor-id-reply").attr("src","img/profile-pics/"+emisor.toLowerCase()+".jpg"); 
  $('#conversation').html("");
  cargarContactos(emisor);
});

function seleccionarContacto(codigoContacto, nombreContacto){
	//alert("CONTACTO seleccionado: " + codigoContacto + ", Nombre: " + nombreContacto);
}

$("#btn-enviar").click(

	
	function (){
    
    //enviando mensaje para guardar en texto
    var texto =  $('#txta-mensaje').val();
    parametros = "emisor="+emisor+"&receptor="+receptor+"&txta-mensaje="+texto+"&tiempo="+getTiempo();
    $.ajax(
        {
          url: "../whatsapp/php/saveMessage.php",
          data: parametros,
          method:"POST",
          success:function(respuesta){
            alert(respuesta);
          },
          error:function(){
            alert("Ocurrio un error");
          }
        }
      );

    printMsg(emisor, receptor, texto, getTiempo());
	
	
});



//rutina para cargar mensajes
function cargarMensajes(emisor, receptor){  
   
    parametros = "emisor="+emisor+"&receptor="+receptor;
    var json ='';
    $.ajax(
        {
          url: "../whatsapp/php/loadMessage.php",
          data: parametros,
          method:"POST",
          success:function(respuesta){ 
              json = respuesta;
              /*var myObj = JSON.parse(json);
              printMsg(myObj.emisor, myObj.receptor, myObj.mensaje, myObj.tiempo);*/
              var json_array = json.split("-");
              for (var i = 0; i<json_array.length-1; i++) {
                console.log(json_array[i]);
                var myObj = JSON.parse(json_array[i]);
                printMsg(myObj.emisor, myObj.receptor, myObj.mensaje, myObj.tiempo);
              }
          },
          error:function(){
            alert("Ocurrio un error");
          }
        }
      );   

    
}


function printMsg(emisor, receptor, texto, tiempo){
  
  var mensaje = 
      '<div class="row message-body">'
            +'<div class="col-sm-12 message-main-receiver">'
              +'<div class="col-xs-2 col-md-2">'
                 +'<div class="avatar-icon put-it-right">'
                  +'<img src="img/profile-pics/'+emisor+'.jpg">'
                +'</div>'
              +'</div>'
              +'<div class="col-xs-7 col-md-7">'
                +'<div class="message-text">'
                   +'<p><span class="titulo-contacto">'+emisor+'</span><br>'+texto +'</p>'
                +'</div>'
              +'</div>'
              +'<div class="col-xs-3 col-md-3">'
                +'<span class="message-time pull-right">'
                 +tiempo
                +'</span>'
              +'</div>'
           +' </div>'
         +' </div>'

     // document.getElementById('conversation').innerHTML = mensaje;
     var previo = $('#conversation').html(); 
     
     $('#conversation').html("");
      mensaje = previo+mensaje;
      $('#conversation').html(mensaje);
}


$(document).ready(function(){ 
    /* setInterval( function(){
      $('#conversation').html("");
      cargarMensajes(emisor, receptor);
      nombre =  '<p class="titulo" id="nombre-contacto"><b>'+receptor+'</b>'
              +'    <span style="color: #e0e0e0; font-size: 12px;">actualizado a las '+getTiempo()+'</span>'
              +'</p>';
      $('#emisor-div').html(nombre); 

      }, 10000);*/

});




