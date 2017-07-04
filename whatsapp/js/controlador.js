$("#slc-usuario").change(function(){
	alert("USUARIO seleccionado: " + $("#slc-usuario").val());
});

function seleccionarContacto(codigoContacto, nombreContacto){
	//alert("CONTACTO seleccionado: " + codigoContacto + ", Nombre: " + nombreContacto);
}


function getTiempo(){
    var tiempo = new Date();
    var hora = tiempo.getHours();
    var minuto = tiempo.getMinutes();
    var segundo = tiempo.getSeconds();

}

$("#btn-enviar").click(

	
	function (){

  //calculando tiempo
    var tiempo = new Date();
    var hora = tiempo.getHours();
    var minuto = tiempo.getMinutes(); 
    var tiempo = ''+hora+':'+minuto;


	var texto =  $('#txta-mensaje').val();
	
  var mensaje = 
      '<div class="row message-body">'
            +'<div class="col-sm-12 message-main-receiver">'
              +'<div class="col-xs-2 col-md-2">'
                 +'<div class="avatar-icon put-it-right">'
                  +'<img src="img/profile-pics/trunks.jpg">'
                +'</div>'
              +'</div>'
              +'<div class="col-xs-7 col-md-7">'
                +'<div class="message-text">'
                   +'<p><span class="titulo-contacto">Nombre de usuario</span><br>'+texto +'</p>'
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
     
     
      mensaje = previo+mensaje;
      console.log(mensaje);
      $('#conversation').html(mensaje);
	
});


