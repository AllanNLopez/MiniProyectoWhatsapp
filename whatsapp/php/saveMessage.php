<?php
	
	/*include_once("../class/msgController.php");

	$msg = new msgController();

	$msg->writeMsg($_POST['txta-mensaje']);*/

	$archivo = fopen("../data/mensajes.csv","a+") or die ("No se pudo crear el archivo");
	$contenido = "\r\n".$_POST['emisor'].",".$_POST['receptor'].",".$_POST['txta-mensaje'].",".$_POST['tiempo'];
	fwrite($archivo, $contenido);
	fclose($archivo);

	echo "guardado con exito";

?>