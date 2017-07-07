

  var codigoReceptor;
  var codigoEmisor=$('#slc-usuario').val();
  var arregloContactoNombre=['Vegeta','Goku','Trunks','Patricio']


  //se creo un div para que al iniciar no se muestre nada en la conversacion   
  $('#conversation').hide(); 
  $('#div-enviar').hide()
  $('#hiden-conversation').show()


  
  //rutina para cargar mensajes
  function cargarMensajes(){
      var arregloMensajes=[];
      //alert("cargando mensajes");
      //alert(codigoEmisor+","+codigoReceptor)
     

      $.ajax({  
          type: 'POST',  
          url: 'obtenerMsg.php', 
          dataType: 'json',
          cache: false,
          data: { emisor: codigoEmisor,receptor: codigoReceptor },
          success: function(respuesta) {

            agregarMensajes(respuesta);
            //console.log(respuesta);
           

           
          }
        });

    
  }
  function limpiarConversacion(){
    $('#conversation').html(" ");

  }

  function agregarMensajes(arreglo){
    //alert("agregando mensajes")
    $('#conversation').html("");

    for (var i = 0; i <arreglo.length; i++) {
      //console.log(arreglo[i][1]+","+arreglo[i][0]);

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
                     +'<p><span class="titulo-contacto">'+arregloContactoNombre[arreglo[i][1]]+'</span><br>'+arreglo[i][0] +'</p>'
                  +'</div>'
                +'</div>'
                +'<div class="col-xs-3 col-md-3">'
                  +'<span class="message-time pull-right">'
                  +arreglo[i][2]
                  +'</span>'
                +'</div>'
             +' </div>'
           +' </div>'



       // document.getElementById('conversation').innerHTML = mensaje;
       var previo = $('#conversation').html(); 

        mensaje = previo+mensaje;
        //console.log(mensaje);
        $('#conversation').html(mensaje);
      }

      $('#conversation').scrollTop($('#conversation')[0].scrollHeight);

      setInterval(function(){ 
       limpiarConversacion();
       cargarMensajes();
        }, 30000);



  }



  $("#slc-usuario").change(function(){
  	//alert("USUARIO seleccionado: " + $("#slc-usuario").val());
    codigoEmisor=$('#slc-usuario').val();
    ///alert(codigoEmisor);
  });

  function seleccionarContacto(codigoContacto, nombreContacto){
  	//alert("CONTACTO seleccionado: " + codigoContacto + ", Nombre: " + nombreContacto);
    
    
    codigoReceptor=codigoContacto;

  }


  function getTiempo(){
      var tiempo = new Date();
      var hora = tiempo.getHours();
      var minuto = tiempo.getMinutes();
      var segundo = tiempo.getSeconds();

  }

$('.sideBar-body').click(function(){
    //alert("has hecho click");
    $('.sideBar-body').removeClass('active');
    $(this).addClass('active');
    
    $('#conversation').show();
    $('#div-enviar').show();
    $('#hiden-conversation').hide();
    limpiarConversacion();
    cargarMensajes();
 

  //#### ajax para conseguir la lista de los mensajez 


  });

 


 

  $("#btn-enviar").click( function (){



    //calculando tiempo
      var tiempo = new Date();
      var hora = tiempo.getHours();
      var minuto = tiempo.getMinutes(); 
      var tiempo = ''+hora+':'+minuto;




  	var texto =  $('#txta-mensaje').val();
    $('#txta-mensaje').val('');
   
    codigoEmisor=$('#slc-usuario').val();

    if(texto.length!=0){
      
      $.ajax({  
        type: 'POST',  
        url: 'procesarMsg.php', 
        data: { emisor: codigoEmisor,receptor: codigoReceptor,mensaje: texto, hora: tiempo },
        success: function(respuesta) {
          





           
        }
      });
    }

    
    

  /*
    $.post('test.php', { album: this.title }, function() {
      content.html(response);
    });
  */
    //######codigo para ajax#############

  	
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
                     +'<p><span class="titulo-contacto">'+arregloContactoNombre[codigoEmisor]+'</span><br>'+texto +'</p>'
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
        //console.log(mensaje);
        $('#conversation').html(mensaje);
      
       

       
       
       
  	
  });


