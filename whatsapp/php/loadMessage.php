<?php
	include_once("../class/class-mensaje.php");

	$emisor = $_POST['emisor'];
	$receptor = $_POST['receptor'];

	$retorno = "";
	$vectorMensajes; 
	$contador = 1;
	//abrir archivo de mensajes
	$messajeLine = "";
	$file = fopen("../data/mensajes.csv","r");
          	
  	while(!feof($file)) {
  		$messajeLine = fgets($file);
  		$vectorMensajes = explode(",", $messajeLine);
  		if (strcmp ($vectorMensajes[0] , $emisor ) == 0 && strcmp ($vectorMensajes[1] , $receptor ) ==0 ) {
  			$mensajex = new Mensaje(
  								$vectorMensajes[0],
  								$vectorMensajes[1],
  								$vectorMensajes[2],
  								rtrim($vectorMensajes[3],"\r\n")
  								);
  			$retorno = $retorno.$mensajex->toJSON()."-";
  		} elseif (strcmp ($vectorMensajes[1] , $emisor ) == 0 && strcmp ($vectorMensajes[0] , $receptor ) ==0) {
  			$mensajex = new Mensaje(
  								$vectorMensajes[0],
  								$vectorMensajes[1],
  								$vectorMensajes[2],
  								rtrim($vectorMensajes[3],"\r\n")
  								);
  			$retorno = $retorno.$mensajex->toJSON()."-";
  		}
 	}
  	fclose($file);
/*
  	echo $messajeLine;
  	echo "<br>";*/
  	echo $retorno;

	//llenar areglo de mensajes

	//mientras no haya terminado la lectura, envia la cadena "null"
	//cuando haya terminado con el archivo, envia el archivo jason




?>