<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Whatsapp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="icon" type="image/png" href="img/telegram.png">
  <!-- Font Awesome File -->
  <link rel="stylesheet" href="css/font-awesome.css">

  <style type="text/css">
      .gray-search-box{
          background-color: #e0e0e0;
          border-radius: 1px;
          border-color: #e0e0e0;
          height: 60px;
      }

      .msg-text-margin{
           margin-top: 0px;
      }

      .put-it-right{
          margin-left: 40px;
      }

      .form-control-feedback {
          left: 0px;
      }

      .input-search-padding{
          padding-left: 35px;
          box-shadow: none;
          background-color: #e8e8e8;
          border-radius: 3px;
          border-style: none;
      }

      .emoji-style{
          height: 20px; 
          width: 20px; 
          color: #e0e0e0; 
          padding: 5px;"
      }

      .code{ 
        display: none;
      }

  </style>

</head>

<body>

  <div class="container app">
    <div class="row app-one">

      <div class="col-sm-4 side">
        <div class="side-one">
          <!-- Heading -->
          <div class="row heading">
            <div class="col-xs-2 col-md-2">
              <span class="glyphicon glyphicon-menu-hamburger " aria-hidden="true" style="font-size: 25px; color: #fff;"></span>
            </div>
            <!-- <div class="col-xs-9 col-md-9" >
                <p class="titulo">Telegram</p>
            </div> -->
            
            <div class="col-md-2 col-xs-3 heading-avatar">
              <div class="heading-avatar-icon">
                <img id="emisor-id" src="img/profile-pics/vegeta.jpg">
              </div>
            </div>
            <div class="col-md-6 col-xs-5" style="padding:0;">
                <select id="slc-usuario" class="form-control"> 
                    <option value = "1">vegeta</option>
                    <option value = "2">trunks</option>
                    <option value = "3">goku</option>
                    <option value = "4">krilin</option>
                    <option value = "5">patricio</option>
                    <option value = "6">gohan</option>
                    <option value = "7">roshi</option>
                </select>
            </div>
           <!--  <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
              <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
            </div>
            <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
              <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
            </div> -->
          </div>
          <!-- Heading End -->

          <!-- SearchBox -->
          <div class="row searchBox ">
            <div class="col-sm-12 searchBox-inner">
              <div class="form-group has-feedback">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                <input id="searchText" type="text" class="form-control input-search-padding" name="searchText" placeholder="Buscar">
              </div>
            </div>
          </div>

          <!-- Search Box End -->
          <!-- sideBar -->
          <div class="row sideBar" id="sideBar">

          
            <!-- Inicio de la lista de conversaciones -->
            <!--Goku-->
           <!--  <div class="row sideBar-body"  >
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="img/profile-pics/goku.jpg">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <p class="name-meta">goku</p><p class="code">012</p>
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div> -->

            <!--Trunks-->
            <!-- <div class="row sideBar-body"  >
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="img/profile-pics/trunks.jpg">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <p class="name-meta">trunks</p><p class="code">054</p>
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div> -->

            <!--Patricio-->
            <!-- <div class="row sideBar-body"  >
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="img/profile-pics/patricio.jpg">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <p class="name-meta">patricio</p>
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Fin de la lista de conversaciones -->

          </div>
          <!-- Sidebar End -->
        </div>
        <div class="side-two">

          <!-- Heading -->
          <div class="row newMessage-heading">
            <div class="row newMessage-main">
              <div class="col-sm-2 col-xs-2 newMessage-back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </div>
              <div class="col-sm-10 col-xs-10 newMessage-title">
                New Chat
              </div>
            </div>
          </div>
          <!-- Heading End -->

          <!-- ComposeBox -->
          <div class="row composeBox">
            <div class="col-sm-12 composeBox-inner">
              <div class="form-group has-feedback">
                <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
          </div>
          <!-- ComposeBox End -->
        </div>
        <!-- Sidebar End -->
      </div>


      <!-- New Message Sidebar End -->

      <!-- Conversation Start -->
      <div class="col-sm-8 conversation">
        <!-- Heading -->
        <div class="row heading">

          <div class="col-xs-10 col-md-10" id="emisor-div">
              <p class="titulo" id="nombre-contacto"><b>Nombre de contacto</b>
                  <span style="color: #e0e0e0; font-size: 12px;">Se actualizara en 30 segundos</span>
              </p>
          </div>
          <div class="col-xs-1 col-md-1">
            <span class="glyphicon glyphicon-search " aria-hidden="true" style="font-size: 19px; color: #e0e0e0;"></span>
          </div>
          <div class="col-xs-1 col-md-1">
            <span class="glyphicon glyphicon-option-vertical" aria-hidden="true" style="font-size: 19px; color: #e0e0e0;"></span>
          </div>
          <!-- <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="img/profile-pics/goku.jpg">
            </div>
          </div>         
          <div class="col-sm-8 col-xs-7 heading-name">
            <a class="heading-name-meta">Goku
            </a>
            <span class="heading-online">Online</span>
          </div>
          <div class="col-sm-1 col-xs-1  heading-dot pull-right">
            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
          </div> -->
        </div>
        <!-- Heading End -->

        <!-- Message Box -->
        <div class="row message" id="conversation">

          <div class="row message-previous">
            <div class="col-sm-12 previous">
            </div>
          </div>

         <!--  <div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="col-xs-2 col-md-2">
                 <div class="avatar-icon put-it-right">
                  <img src="img/profile-pics/goku.jpg">
                </div>
              </div>
              <div class="col-xs-8 col-md-8">
                <div class="message-text">
                   <p><span class="titulo-contacto" >Nombre de usuario</span><br>
                    
                   </p>
                </div>
              </div>
              <div class="col-xs-2 col-md-2">
                <span class="message-time pull-right">
                  18:18
                </span>
              </div>
            </div>
          </div> -->

          <!--  <div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="col-xs-2 col-md-2">
                 <div class="avatar-icon put-it-right">
                  <img src="img/profile-pics/trunks.jpg">
                </div>
              </div>
              <div class="col-xs-7 col-md-7">
                <div class="message-text">
                   <p><span class="titulo-contacto">Nombre de usuario</span><br>
                        Kakaroto!!!!<br>
                        Contestame animal
                   </p>

                </div>
              </div>
              <div class="col-xs-3 col-md-3">
                <span class="message-time pull-right">
                  18:18
                </span>
              </div>
            </div>
          </div> -->

          <!-- <div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="receiver">
                <div class="message-text">
                 Kakaroto!!!!
                </div>
                <span class="message-time pull-right">
                  18:18
                </span>
              </div>
            </div>
          </div> -->

         <!--  <div class="row message-body">
            <div class="col-sm-12 message-main-sender">
              <div class="sender">
                <div class="message-text">
                  Que tal Vegueta?
                </div>
                <span class="message-time pull-right">
                  18:19
                </span>
              </div>
            </div>
          </div>  -->

          <!-- <div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="receiver">
                <div class="message-text">
                 Eres un insecto estupido!!!!
                </div>
                <span class="message-time pull-right">
                  18:20
                </span>
              </div>
            </div>
          </div> -->
        </div>


        <!-- Message Box End -->

        <!-- Reply Box -->
        <div class="row reply">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-xs-2 col-sm-2">
              <div class="avatar-icon" >
                    <img id="emisor-id-reply" src="img/profile-pics/krilin.jpg">
              </div>
            </div>
            <div class="col-xs-8 col-sm-8">
              <div class="reply-main">
                <textarea class="form-control" rows="1" id="txta-mensaje"></textarea>
                <div class="col-xs-9">
                     <span class="emoji-style"><i class="fa fa-file" aria-hidden="true"></i></span>
                    <span class="emoji-style"><i class="fa fa-camera" aria-hidden="true"></i></span>
                     <img src="img/emojis/e1.png" width="20px" height="20px">
                     <img src="img/emojis/e2.png" width="20px" height="20px">
                     <img src="img/emojis/e3.png" width="20px" height="20px">
                     <img src="img/emojis/e4.png" width="20px" height="20px">
                     <img src="img/emojis/e5.png" width="20px" height="20px">
                </div>
                <div class="col-xs-3">
                  <button class="boton-enviar" id="btn-enviar">ENVIAR</button>
                </div>
              </div> 
            </div>
            <div class="col-xs-2 col-sm-2">
              <div class="avatar-icon">
                    <img id="receptor-id" src="img/profile-pics/patricio.jpg">
              </div>
            </div>
          </div>
         <!--  <div class="col-sm-1 col-xs-1 reply-emojis">
            <i class="fa fa-smile-o fa-2x"></i>
          </div>
          <div class="col-sm-9 col-xs-9 reply-main">
            <textarea class="form-control" rows="1" id="txta-mensaje"></textarea>
          </div>
          <div class="col-sm-1 col-xs-1 reply-recording">
            <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
          </div>
          <div id="btn-enviar" class="col-sm-1 col-xs-1 reply-send">
            <i class="fa fa-send fa-2x" aria-hidden="true"></i>
          </div> -->
        </div>
        <!-- Reply Box End -->
      </div>
      <!-- Conversation End -->
    </div>
    <!-- App One End -->

    
  </div>

  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/controlador.js"></script>
  <!-- App End -->
  
</body>

</html>
